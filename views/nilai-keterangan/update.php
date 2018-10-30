<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiKeterangan */

$this->title = 'Update Nilai Keterangan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nilai Keterangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nilai-keterangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
