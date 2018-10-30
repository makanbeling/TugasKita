<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiBaru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilai-baru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prov_kab_kot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_layanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_wilayah')->dropDownList([ 'Wilayah 1' => 'Wilayah 1', 'Wilayah 2' => 'Wilayah 2', 'Wilayah 3' => 'Wilayah 3', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'p_1_a_K1')->textInput() ?>

    <?= $form->field($model, 'p_1_a_K2')->textInput() ?>

    <?= $form->field($model, 'p_1_a_k3')->textInput() ?>

    <?= $form->field($model, 'p_1_a_P')->textInput() ?>

    <?= $form->field($model, 'p_1_a_T')->textInput() ?>

    <?= $form->field($model, 'p_1_a_Ak')->textInput() ?>

    <?= $form->field($model, 'p_1_a_As')->textInput() ?>

    <?= $form->field($model, 'p_1_a_B')->textInput() ?>

    <?= $form->field($model, 'p_1_b_T')->textInput() ?>

    <?= $form->field($model, 'p_1_c_P')->textInput() ?>

    <?= $form->field($model, 'p_1_c_T')->textInput() ?>

    <?= $form->field($model, 'p_1_c_Ak')->textInput() ?>

    <?= $form->field($model, 'p_1_c_B')->textInput() ?>

    <?= $form->field($model, 'p_2_a_Ak')->textInput() ?>

    <?= $form->field($model, 'p_2_b_Ak_1')->textInput() ?>

    <?= $form->field($model, 'p_2_b_Ak_2')->textInput() ?>

    <?= $form->field($model, 'p_2_d_K')->textInput() ?>

    <?= $form->field($model, 'p_2_e_K1')->textInput() ?>

    <?= $form->field($model, 'p_2_e_K2')->textInput() ?>

    <?= $form->field($model, 'p_2_g_Ak')->textInput() ?>

    <?= $form->field($model, 'p_3_a_As')->textInput() ?>

    <?= $form->field($model, 'p_3_b_K1')->textInput() ?>

    <?= $form->field($model, 'p_3_b_As')->textInput() ?>

    <?= $form->field($model, 'p_3_c_K')->textInput() ?>

    <?= $form->field($model, 'p_3_d_As1')->textInput() ?>

    <?= $form->field($model, 'p_3_e_As2')->textInput() ?>

    <?= $form->field($model, 'p_3_e_As4')->textInput() ?>

    <?= $form->field($model, 'p_4_a_T')->textInput() ?>

    <?= $form->field($model, 'p_4_a_B')->textInput() ?>

    <?= $form->field($model, 'p_4_a_Ak1')->textInput() ?>

    <?= $form->field($model, 'p_4_a_Ak2')->textInput() ?>

    <?= $form->field($model, 'p_4_b_T')->textInput() ?>

    <?= $form->field($model, 'p_5_a_K')->textInput() ?>

    <?= $form->field($model, 'p_5_a_As')->textInput() ?>

    <?= $form->field($model, 'p_5_b_K')->textInput() ?>

    <?= $form->field($model, 'p_5_b_As')->textInput() ?>

    <?= $form->field($model, 'p_6_')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
