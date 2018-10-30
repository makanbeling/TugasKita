<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NilaiBaru */

$this->title = 'Grafik Penilaian IPP Per Daerah';
//$this->params['breadcrumbs'][] = ['label' => 'Nilai Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-baru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_daerah', [
        'model' => $model,
        'prov_kab_kot'=>$prov_kab_kot,
        'unit_layanan'=>$unit_layanan,
    ]) ?>

</div>
