<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NilaiKeterangan */

$this->title = 'Create Nilai Keterangan';
$this->params['breadcrumbs'][] = ['label' => 'Nilai Keterangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-keterangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
