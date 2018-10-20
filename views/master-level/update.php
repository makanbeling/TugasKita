<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterLevel */

$this->title = 'Update Master Level: ' . $model->id_level;
$this->params['breadcrumbs'][] = ['label' => 'Master Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_level, 'url' => ['view', 'id' => $model->id_level]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-level-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
