<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiUpp */

$this->title = 'jaiminsi  ';
$this->params['breadcrumbs'][] = ['label' => 'Nilai Upps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-upp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'nilai',
            'address',
        ],
    ]) ?>

</div>
