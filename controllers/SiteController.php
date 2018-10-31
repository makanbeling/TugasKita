<?php

namespace app\controllers;

use app\models\NilaiBaru;
use app\models\UploadForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * @return string|void
     */
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->excelFile = UploadedFile::getInstance($model, 'excelFile');
            if ($model->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    public function actionForm()
    {
        $model = new \yii\base\DynamicModel([
            'name', 'email', 'address', 'fileImport',
        ]);
        $model->addRule(['name','email'], 'required')
            ->addRule(['email'], 'email')
            ->addRule(['fileImport'], 'file', ['extensions' => 'ods,xls,xlsx'])
            ->addRule('address', 'string',['max'=>32]);

        if($model->load(Yii::$app->request->post())&&$model->validate()){
            // do somenthing with model
            $databaru = new NilaiBaru();
            $model->fileImport = \yii\web\UploadedFile::getInstance($model, 'fileImport');
            $inputFileType = \PHPExcel_IOFactory::identify($model->fileImport->tempName);
            $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($model->fileImport->tempName);
            $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
            $databaru->unit_layanan = $model->email;
            $databaru->jenis_wilayah = 'Wilayah 3';
            $databaru->p_1_a_P = (int)$sheetData[12]['D'];
            if ($databaru->save()){
                Yii::$app->getSession()->setFlash('success', 'Success');
            }else{
                Yii::$app->getSession()->setFlash('error', 'error');
            }
            //return $this->render('views',['model'=>$model]);
        }
        return $this->render('form', ['model'=>$model]);
    }
}
