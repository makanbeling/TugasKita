<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MasterDaerah */

$this->title = 'Create Master Daerah';
$this->params['breadcrumbs'][] = ['label' => 'Master Daerahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-daerah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
