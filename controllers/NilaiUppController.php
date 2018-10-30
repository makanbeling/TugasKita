<?php

namespace app\controllers;

use app\models\MasterDaerah;
use app\models\MasterUpp;
use Yii;
use app\models\NilaiUpp;
use app\models\NilaiUppSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NilaiUppController implements the CRUD actions for NilaiUpp model.
 */
class NilaiUppController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all NilaiUpp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NilaiUppSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NilaiUpp model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NilaiUpp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NilaiUpp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_nilai]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NilaiUpp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_nilai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NilaiUpp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NilaiUpp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NilaiUpp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NilaiUpp::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * @return string
     * @throws \PHPExcel_Exception
     * @throws \PHPExcel_Reader_Exception
     */
    public function actionImport()
    {
        $modelImport = new \yii\base\DynamicModel([
            'fileImport' => 'File Import',
            'tahun' => 'Tahun',
            'id_daerah' => 'Daerah',
            'id_upp' => 'UPP',
        ]);
        $modelImport->addRule(['fileImport', 'tahun', 'id_daerah', 'id_upp'], 'required');
        $modelImport->addRule(['fileImport'], 'file', ['extensions' => 'ods,xls,xlsx'], ['maxSize' => 1024 * 1024]);
        /*$modelImport->addRule(['tahun'], 'safe');
        $modelImport->addRule(['id_upp', 'id_daerah'], 'integer');*/
        //importing excel masih belum bisa nanti pikirkan lagi
        if (Yii::$app->request->post()) {
            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport && $modelImport->validate()) {
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName);
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                //excel sudah dibuka pada tahap ini maka proses dilanjutkan ke dalam save model
                $model = new NilaiUpp();
                $model->id_level = 3;
                $model->provinsi = 'Provinsi Ini';
                $model->id_daerah = $modelImport->id_daerah;
                $model->nama_daerah = 'sumus';//MasterDaerah::find()->where(['id_daerah'=>1200])->one()->nama_daerah;
                $model->id_upp = $modelImport->id_upp;
                $model->ipp = $sheetData[59]['D'];
                $model->tahun = $modelImport->tahun;
                if($model->save()){
                    Yii::$app->getSession()->setFlash('success', 'Success');
                };
                $model->p_1_a_K1 = (int)$sheetData[9]['G'];
                /*$model->p_1_a_K2 = (int)$sheetData['G'][10];
                $model->p_1_a_k3 = (int)$sheetData['G'][11];
                $model->p_1_a_P = (int)$sheetData['G'][12];
                $model->p_1_a_T = (int)$sheetData['G'][13];
                $model->p_1_a_Ak = (int)$sheetData['G'][14];
                $model->p_1_a_As = (int)$sheetData['G'][15];
                $model->p_1_a_B = (int)$sheetData['G'][16];
                $model->p_1_b_T = (int)$sheetData['G'][17];
                $model->p_1_c_P = (int)$sheetData['G'][18];
                $model->p_1_c_T = (int)$sheetData['G'][19];
                $model->p_1_c_Ak = (int)$sheetData['G'][20];
                $model->p_1_c_B = (int)$sheetData['G'][21];
                $model->p_2_a_Ak = (int)$sheetData['G'][24];
                $model->p_2_b_Ak_1 = (int)$sheetData['G'][25];
                $model->p_2_b_Ak_2 = (int)$sheetData['G'][26];
                $model->p_2_d_K = (int)$sheetData['G'][27];
                $model->p_2_e_K1 = (int)$sheetData['G'][28];
                $model->p_2_e_K2 = (int)$sheetData['G'][29];
                $model->p_2_g_Ak = (int)$sheetData['G'][30];
                $model->p_3_a_As = (int)$sheetData['G'][33];
                $model->p_3_b_K1 = (int)$sheetData['G'][34];
                $model->p_3_b_As = (int)$sheetData['G'][35];
                $model->p_3_c_K = (int)$sheetData['G'][36];
                $model->p_3_d_As1 = (int)$sheetData['G'][37];
                $model->p_3_e_As2 = (int)$sheetData['G'][38];
                $model->p_3_e_As4 = (int)$sheetData['G'][39];
                $model->p_4_a_T = (int)$sheetData['G'][42];
                $model->p_4_a_B = (int)$sheetData['G'][43];
                $model->p_4_a_Ak1 = (int)$sheetData['G'][44];
                $model->p_4_a_Ak2 = (int)$sheetData['G'][45];
                $model->p_4_b_T = (int)$sheetData['G'][46];
                $model->p_5_a_K = (int)$sheetData['G'][49];
                $model->p_5_a_As = (int)$sheetData['G'][50];
                $model->p_5_b_K = (int)$sheetData['G'][51];
                $model->p_5_b_As = (int)$sheetData['G'][52];
                $model->p_6_ = (int)$sheetData['G'][55];
                $model->r_1_a_K1 = $sheetData['I'][9];
                $model->r_1_a_K2 = $sheetData['I'][10];
                $model->r_1_a_k3 = $sheetData['I'][11];
                $model->r_1_a_r = $sheetData['I'][12];
                $model->r_1_a_T = $sheetData['I'][13];
                $model->r_1_a_Ak = $sheetData['I'][14];
                $model->r_1_a_As = $sheetData['I'][15];
                $model->r_1_a_B = $sheetData['I'][16];
                $model->r_1_b_T = $sheetData['I'][17];
                $model->r_1_c_r = $sheetData['I'][18];
                $model->r_1_c_T = $sheetData['I'][19];
                $model->r_1_c_Ak = $sheetData['I'][20];
                $model->r_1_c_B = $sheetData['I'][21];
                $model->r_2_a_Ak = $sheetData['I'][24];
                $model->r_2_b_Ak_1 = $sheetData['I'][25];
                $model->r_2_b_Ak_2 = $sheetData['I'][26];
                $model->r_2_d_K = $sheetData['I'][27];
                $model->r_2_e_K1 = $sheetData['I'][28];
                $model->r_2_e_K2 = $sheetData['I'][29];
                $model->r_2_I_Ak = $sheetData['I'][30];
                $model->r_3_a_As = $sheetData['I'][33];
                $model->r_3_b_K1 = $sheetData['I'][34];
                $model->r_3_b_As = $sheetData['I'][35];
                $model->r_3_c_K = $sheetData['I'][36];
                $model->r_3_d_As1 = $sheetData['I'][37];
                $model->r_3_e_As2 = $sheetData['I'][38];
                $model->r_3_e_As4 = $sheetData['I'][39];
                $model->r_4_a_T = $sheetData['I'][42];
                $model->r_4_a_B = $sheetData['I'][43];
                $model->r_4_a_Ak1 = $sheetData['I'][44];
                $model->r_4_a_Ak2 = $sheetData['I'][45];
                $model->r_4_b_T = $sheetData['I'][46];
                $model->r_5_a_K = $sheetData['I'][49];
                $model->r_5_a_As = $sheetData['I'][50];
                $model->r_5_b_K = $sheetData['I'][51];
                $model->r_5_b_As = $sheetData['I'][52];
                $model->r_6_ = $sheetData['I'][55];*/
            } else {
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
        }
        return $this->render('import', [
            'modelImport' => $modelImport,
            'daerah' => ArrayHelper::map(MasterDaerah::find()->all(), 'id_daerah', 'nama_daerah'),
            'upp' => ArrayHelper::map(MasterUpp::find()->all(), 'id_upp', 'jenis_upp'),
        ]);
    }

    public function actionForm()
    {
        $model = new \yii\base\DynamicModel([
            'name', 'email', 'address'
        ]);
        $model->addRule(['name','email'], 'required')
            ->addRule(['email'], 'email')
            ->addRule('address', 'string',['max'=>32]);

        if($model->load(Yii::$app->request->post())){
            // do somenthing with model
            return $this->render('views',['model'=>$model]);
        }
        return $this->render('form', ['model'=>$model]);
    }
}
