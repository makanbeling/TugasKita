<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterDaerah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-daerah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_daerah')->dropDownList([ 'provinsi' => 'Provinsi', 'kota' => 'Kota', 'kabupaten' => 'Kabupaten', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_daerah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
