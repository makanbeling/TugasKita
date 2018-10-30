<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NilaiBaruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nilai Barus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-baru-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nilai Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'prov',
            'prov_kab_kot',
            'kode',
            'unit_layanan',
            //'tahun',
            //'jenis_wilayah',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
