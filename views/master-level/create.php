<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MasterLevel */

$this->title = 'Create Master Level';
$this->params['breadcrumbs'][] = ['label' => 'Master Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-level-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
