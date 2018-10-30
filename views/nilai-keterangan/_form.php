<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiKeterangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilai-keterangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prinsip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f02')->textInput() ?>

    <?= $form->field($model, 'rata')->textInput() ?>

    <?= $form->field($model, 'indeks')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
