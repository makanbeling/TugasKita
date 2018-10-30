<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NilaiBaru */

$this->title = 'Create Nilai Baru';
$this->params['breadcrumbs'][] = ['label' => 'Nilai Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-baru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
