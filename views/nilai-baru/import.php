<?php
/**
 * Created by PhpStorm.
 * User: rommel
 * Date: 20/10/2018
 * Time: 11:01
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
    <h1>Import Data</h1>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($modelImport, 'keterangan')->textInput(['maxlength' => true]) ?>

<?= $form->field($modelImport, 'fileImport')->fileInput() ?>

<?= Html::submitButton('Import', ['class' => 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>
