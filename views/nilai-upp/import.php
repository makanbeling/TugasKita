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

<?= $form->field($modelImport, 'tahun')->widget(\kartik\date\DatePicker::className(), [
    'options' => ['placeholder' => 'Masukkan tahun laporan'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'yyyy',
        'minViewMode' => 'years',
    ]
])->label('Masukkan Tahun') ?>

<?= $form->field($modelImport, 'id_daerah')->widget(\kartik\select2\Select2::className(), [
    'data' => $daerah,
    'options' => ['placeholder' => 'Nama Daerah'],
    'pluginOptions' => [
        'allowClear' => true
    ],
])->label('Masukkan Daerah') ?>

<?= $form->field($modelImport, 'id_upp')->widget(\kartik\select2\Select2::className(), [
    'data' => $upp,
    'options' => ['placeholder' => 'Jenis UPP'],
    'pluginOptions' => [
        'allowClear' => true
    ],
])->label('Masukkan UPP') ?>

<?= $form->field($modelImport, 'fileImport')->fileInput()->label('Pilih berkas') ?>

<?= Html::submitButton('Import', ['class' => 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>
