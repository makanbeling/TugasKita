<?php

namespace app\controllers;

use Yii;
use app\models\NilaiBaru;
use app\models\NilaiBaruSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NilaiBaruController implements the CRUD actions for NilaiBaru model.
 */
class NilaiBaruController extends Controller
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
     * Lists all NilaiBaru models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NilaiBaruSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NilaiBaru model.
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
     * Creates a new NilaiBaru model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NilaiBaru();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NilaiBaru model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NilaiBaru model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NilaiBaru model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NilaiBaru the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NilaiBaru::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDaerah()
    {
        $model = new NilaiBaru();
        $prov_kab_kot = ArrayHelper::map(NilaiBaru::find()->all(), 'prov_kab_kot', 'prov_kab_kot');
        $unit_layanan = ArrayHelper::map(NilaiBaru::find()->all(), 'unit_layanan', 'unit_layanan');

        if ($model->load(Yii::$app->request->post())) {
            $data_f02 = NilaiBaru::find()->where(['unit_layanan' => $model->unit_layanan, 'prov_kab_kot' => $model->prov_kab_kot])->asArray()->one();
            return $this->render('hasil-daerah', [
                'data_f02' => $data_f02,
            ]);
        }

        return $this->render('daerah', [
            'model' => $model,
            'prov_kab_kot' => $prov_kab_kot,
            'unit_layanan' => $unit_layanan,
        ]);
    }

    public function actionWilayah()
    {
        $model = new NilaiBaru();
        $jenis_wilayah = ArrayHelper::map(NilaiBaru::find()->all(), 'jenis_wilayah', 'jenis_wilayah');
        //$unit_layanan = ArrayHelper::map(NilaiBaru::find()->all(),'unit_layanan','unit_layanan');

        if ($model->load(Yii::$app->request->post())) {
            $data_i24 = NilaiBaru::find()->where(['jenis_wilayah' => $model->jenis_wilayah, 'p_3_c_K' => 5])->asArray();
            $data_i1dan4 = NilaiBaru::find()->where(['jenis_wilayah' => $model->jenis_wilayah, 'p_1_a_K1' => 5, 'p_1_a_P' => 5])->asArray();
            return $this->render('hasil-wilayah', [
                'data_i1dan4' => $data_i1dan4,
                'data_i24' => $data_i24,
            ]);
        }

        return $this->render('wilayah', [
            'model' => $model,
            'jenis_wilayah' => $jenis_wilayah,
            //'unit_layanan'=>$unit_layanan,
        ]);
    }

    public function actionImport()
    {
        $modelImport = new \yii\base\DynamicModel([
            'fileImport',
        ]);
        $modelImport->addRule(['fileImport'], 'required')
            ->addRule(['fileImport'], 'file', ['extensions' => 'ods,xls,xlsx'], ['maxSize' => 1024 * 1024]);
        if (Yii::$app->request->post()) {
            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport && $modelImport->validate()) {
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName);
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                $baseRow = 2;
                while (!empty($sheetData[$baseRow]['B'])) {
                    $model = new NilaiBaru();
                    $model->tahun = 2017;
                    $model->prov = (string)$sheetData[$baseRow]['A'];
                    $model->prov_kab_kot = (string)$sheetData[$baseRow]['B'];
                    $model->kode = (string)$sheetData[$baseRow]['C'];
                    $model->unit_layanan = (string)$sheetData[$baseRow]['D'];
                    $model->jenis_wilayah = 'Wilayah 3';
                    $model->p_1_a_K1 = (int)$sheetData[$baseRow]['E'];
                    $model->p_1_a_K2 = (int)$sheetData[$baseRow]['F'];
                    $model->p_1_a_k3 = (int)$sheetData[$baseRow]['G'];
                    $model->p_1_a_P = (int)$sheetData[$baseRow]['H'];
                    $model->p_1_a_T = (int)$sheetData[$baseRow]['I'];
                    $model->p_1_a_Ak = (int)$sheetData[$baseRow]['J'];
                    $model->p_1_a_As = (int)$sheetData[$baseRow]['K'];
                    $model->p_1_a_B = (int)$sheetData[$baseRow]['L'];
                    $model->p_1_b_T = (int)$sheetData[$baseRow]['M'];
                    $model->p_1_c_P = (int)$sheetData[$baseRow]['N'];
                    $model->p_1_c_T = (int)$sheetData[$baseRow]['O'];
                    $model->p_1_c_Ak = (int)$sheetData[$baseRow]['P'];
                    $model->p_1_c_B = (int)$sheetData[$baseRow]['Q'];
                    $model->p_2_a_Ak = (int)$sheetData[$baseRow]['R'];
                    $model->p_2_b_Ak_1 = (int)$sheetData[$baseRow]['S'];
                    $model->p_2_b_Ak_2 = (int)$sheetData[$baseRow]['T'];
                    $model->p_2_d_K = (int)$sheetData[$baseRow]['U'];
                    $model->p_2_e_K1 = (int)$sheetData[$baseRow]['V'];
                    $model->p_2_e_K2 = (int)$sheetData[$baseRow]['W'];
                    $model->p_2_g_Ak = (int)$sheetData[$baseRow]['X'];
                    $model->p_3_a_As = (int)$sheetData[$baseRow]['Y'];
                    $model->p_3_b_K1 = (int)$sheetData[$baseRow]['Z'];
                    $model->p_3_b_As = (int)$sheetData[$baseRow]['AA'];
                    $model->p_3_c_K = (int)$sheetData[$baseRow]['AB'];
                    $model->p_3_d_As1 = (int)$sheetData[$baseRow]['AC'];
                    $model->p_3_e_As2 = (int)$sheetData[$baseRow]['AD'];
                    $model->p_3_e_As4 = (int)$sheetData[$baseRow]['AE'];
                    $model->p_4_a_T = (int)$sheetData[$baseRow]['AF'];
                    $model->p_4_a_B = (int)$sheetData[$baseRow]['AG'];
                    $model->p_4_a_Ak1 = (int)$sheetData[$baseRow]['AH'];
                    $model->p_4_a_Ak2 = (int)$sheetData[$baseRow]['AI'];
                    $model->p_4_b_T = (int)$sheetData[$baseRow]['AJ'];
                    $model->p_5_a_K = (int)$sheetData[$baseRow]['AK'];
                    $model->p_5_a_As = (int)$sheetData[$baseRow]['AL'];
                    $model->p_5_b_K = (int)$sheetData[$baseRow]['AM'];
                    $model->p_5_b_As = (int)$sheetData[$baseRow]['AN'];
                    $model->p_6_ = (int)$sheetData[$baseRow]['AO'];
                    $model->save();
                    $baseRow++;
                }
                Yii::$app->getSession()->setFlash('success', 'Success');
            } else {
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
        }

        return $this->render('import', [
            'modelImport' => $modelImport,
        ]);
    }
}
