<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NilaiUppSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tabel Nilai IPP';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-upp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Impor IPP', ['import'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_nilai',
            'id_level',
            'provinsi',
            'id_daerah',
            'nama_daerah',
            //'id_upp',
            //'ipp',
            //'tahun',
            //'p_1_a_K1',
            //'p_1_a_K2',
            //'p_1_a_k3',
            //'p_1_a_P',
            //'p_1_a_T',
            //'p_1_a_Ak',
            //'p_1_a_As',
            //'p_1_a_B',
            //'p_1_b_T',
            //'p_1_c_P',
            //'p_1_c_T',
            //'p_1_c_Ak',
            //'p_1_c_B',
            //'p_2_a_Ak',
            //'p_2_b_Ak_1',
            //'p_2_b_Ak_2',
            //'p_2_d_K',
            //'p_2_e_K1',
            //'p_2_e_K2',
            //'p_2_g_Ak',
            //'p_3_a_As',
            //'p_3_b_K1',
            //'p_3_b_As',
            //'p_3_c_K',
            //'p_3_d_As1',
            //'p_3_e_As2',
            //'p_3_e_As4',
            //'p_4_a_T',
            //'p_4_a_B',
            //'p_4_a_Ak1',
            //'p_4_a_Ak2',
            //'p_4_b_T',
            //'p_5_a_K',
            //'p_5_a_As',
            //'p_5_b_K',
            //'p_5_b_As',
            //'p_6_',
            //'r_1_a_K1',
            //'r_1_a_K2',
            //'r_1_a_k3',
            //'r_1_a_P',
            //'r_1_a_T',
            //'r_1_a_Ak',
            //'r_1_a_As',
            //'r_1_a_B',
            //'r_1_b_T',
            //'r_1_c_P',
            //'r_1_c_T',
            //'r_1_c_Ak',
            //'r_1_c_B',
            //'r_2_a_Ak',
            //'r_2_b_Ak_1',
            //'r_2_b_Ak_2',
            //'r_2_d_K',
            //'r_2_e_K1',
            //'r_2_e_K2',
            //'r_2_g_Ak',
            //'r_3_a_As',
            //'r_3_b_K1',
            //'r_3_b_As',
            //'r_3_c_K',
            //'r_3_d_As1',
            //'r_3_e_As2',
            //'r_3_e_As4',
            //'r_4_a_T',
            //'r_4_a_B',
            //'r_4_a_Ak1',
            //'r_4_a_Ak2',
            //'r_4_b_T',
            //'r_5_a_K',
            //'r_5_a_As',
            //'r_5_b_K',
            //'r_5_b_As',
            //'r_6_',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
