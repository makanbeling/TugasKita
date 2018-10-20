<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiUpp */

$this->title = 'Update Nilai Upp: ' . $model->id_nilai;
$this->params['breadcrumbs'][] = ['label' => 'Nilai Upps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_nilai, 'url' => ['view', 'id' => $model->id_nilai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nilai-upp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
