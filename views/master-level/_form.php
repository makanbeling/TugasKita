<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterLevel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-level-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_level')->dropDownList([ 'I' => 'I', 'II' => 'II', 'III' => 'III', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
