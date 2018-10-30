<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiBaru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilai-baru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'prov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_wilayah')->widget(\kartik\select2\Select2::className(), [
        'data' => $jenis_wilayah,
        'options' => ['placeholder' => 'Jenis Wilayah'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?php // $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
