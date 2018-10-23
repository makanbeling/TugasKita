<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii2mod\alert\Alert;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    if (1==1){
        Yii::$app->session->setFlash('', $this->title);
    }else{
        Yii::$app->session->setFlash('error', 'error is happened');
    }
    ?>
    <?php
    echo Alert::widget();
    ?>
    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
