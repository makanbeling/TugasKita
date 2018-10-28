<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiUppSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilai-upp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_nilai') ?>

    <?= $form->field($model, 'id_level') ?>

    <?= $form->field($model, 'provinsi') ?>

    <?= $form->field($model, 'id_daerah') ?>

    <?= $form->field($model, 'nama_daerah') ?>

    <?php // echo $form->field($model, 'id_upp') ?>

    <?php // echo $form->field($model, 'ipp') ?>

    <?php // echo $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'p_1_a_K1') ?>

    <?php // echo $form->field($model, 'p_1_a_K2') ?>

    <?php // echo $form->field($model, 'p_1_a_k3') ?>

    <?php // echo $form->field($model, 'p_1_a_P') ?>

    <?php // echo $form->field($model, 'p_1_a_T') ?>

    <?php // echo $form->field($model, 'p_1_a_Ak') ?>

    <?php // echo $form->field($model, 'p_1_a_As') ?>

    <?php // echo $form->field($model, 'p_1_a_B') ?>

    <?php // echo $form->field($model, 'p_1_b_T') ?>

    <?php // echo $form->field($model, 'p_1_c_P') ?>

    <?php // echo $form->field($model, 'p_1_c_T') ?>

    <?php // echo $form->field($model, 'p_1_c_Ak') ?>

    <?php // echo $form->field($model, 'p_1_c_B') ?>

    <?php // echo $form->field($model, 'p_2_a_Ak') ?>

    <?php // echo $form->field($model, 'p_2_b_Ak_1') ?>

    <?php // echo $form->field($model, 'p_2_b_Ak_2') ?>

    <?php // echo $form->field($model, 'p_2_d_K') ?>

    <?php // echo $form->field($model, 'p_2_e_K1') ?>

    <?php // echo $form->field($model, 'p_2_e_K2') ?>

    <?php // echo $form->field($model, 'p_2_g_Ak') ?>

    <?php // echo $form->field($model, 'p_3_a_As') ?>

    <?php // echo $form->field($model, 'p_3_b_K1') ?>

    <?php // echo $form->field($model, 'p_3_b_As') ?>

    <?php // echo $form->field($model, 'p_3_c_K') ?>

    <?php // echo $form->field($model, 'p_3_d_As1') ?>

    <?php // echo $form->field($model, 'p_3_e_As2') ?>

    <?php // echo $form->field($model, 'p_3_e_As4') ?>

    <?php // echo $form->field($model, 'p_4_a_T') ?>

    <?php // echo $form->field($model, 'p_4_a_B') ?>

    <?php // echo $form->field($model, 'p_4_a_Ak1') ?>

    <?php // echo $form->field($model, 'p_4_a_Ak2') ?>

    <?php // echo $form->field($model, 'p_4_b_T') ?>

    <?php // echo $form->field($model, 'p_5_a_K') ?>

    <?php // echo $form->field($model, 'p_5_a_As') ?>

    <?php // echo $form->field($model, 'p_5_b_K') ?>

    <?php // echo $form->field($model, 'p_5_b_As') ?>

    <?php // echo $form->field($model, 'p_6_') ?>

    <?php // echo $form->field($model, 'r_1_a_K1') ?>

    <?php // echo $form->field($model, 'r_1_a_K2') ?>

    <?php // echo $form->field($model, 'r_1_a_k3') ?>

    <?php // echo $form->field($model, 'r_1_a_P') ?>

    <?php // echo $form->field($model, 'r_1_a_T') ?>

    <?php // echo $form->field($model, 'r_1_a_Ak') ?>

    <?php // echo $form->field($model, 'r_1_a_As') ?>

    <?php // echo $form->field($model, 'r_1_a_B') ?>

    <?php // echo $form->field($model, 'r_1_b_T') ?>

    <?php // echo $form->field($model, 'r_1_c_P') ?>

    <?php // echo $form->field($model, 'r_1_c_T') ?>

    <?php // echo $form->field($model, 'r_1_c_Ak') ?>

    <?php // echo $form->field($model, 'r_1_c_B') ?>

    <?php // echo $form->field($model, 'r_2_a_Ak') ?>

    <?php // echo $form->field($model, 'r_2_b_Ak_1') ?>

    <?php // echo $form->field($model, 'r_2_b_Ak_2') ?>

    <?php // echo $form->field($model, 'r_2_d_K') ?>

    <?php // echo $form->field($model, 'r_2_e_K1') ?>

    <?php // echo $form->field($model, 'r_2_e_K2') ?>

    <?php // echo $form->field($model, 'r_2_g_Ak') ?>

    <?php // echo $form->field($model, 'r_3_a_As') ?>

    <?php // echo $form->field($model, 'r_3_b_K1') ?>

    <?php // echo $form->field($model, 'r_3_b_As') ?>

    <?php // echo $form->field($model, 'r_3_c_K') ?>

    <?php // echo $form->field($model, 'r_3_d_As1') ?>

    <?php // echo $form->field($model, 'r_3_e_As2') ?>

    <?php // echo $form->field($model, 'r_3_e_As4') ?>

    <?php // echo $form->field($model, 'r_4_a_T') ?>

    <?php // echo $form->field($model, 'r_4_a_B') ?>

    <?php // echo $form->field($model, 'r_4_a_Ak1') ?>

    <?php // echo $form->field($model, 'r_4_a_Ak2') ?>

    <?php // echo $form->field($model, 'r_4_b_T') ?>

    <?php // echo $form->field($model, 'r_5_a_K') ?>

    <?php // echo $form->field($model, 'r_5_a_As') ?>

    <?php // echo $form->field($model, 'r_5_b_K') ?>

    <?php // echo $form->field($model, 'r_5_b_As') ?>

    <?php // echo $form->field($model, 'r_6_') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
