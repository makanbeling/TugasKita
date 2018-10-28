<?php

/* @var $this yii\web\View */

use kartik\widgets\Select2;
use yii\helpers\Html;
<<<<<<< HEAD
use dosamigos\chartjs\ChartJs;
=======
use yii2mod\alert\Alert;
>>>>>>> b4594cf7de622c8b051b42d92e4bd593355e6a65

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<<<<<<< HEAD
    <div class="col-lg-6">
    </div>
    <div class="col-lg-6">
        <div class="col-lg-6">
            <?= ChartJs::widget([
                'type' => 'bar',
                'options' => [
                    'height' => 400,
                    'width' => 400
                ],
                'data' => [
                    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
                    'datasets' => [
                        [
                            'label' => "My First dataset",
                            'backgroundColor' => "rgba(179,181,198,0.2)",
                            'borderColor' => "rgba(179,181,198,1)",
                            'pointBackgroundColor' => "rgba(179,181,198,1)",
                            'pointBorderColor' => "#fff",
                            'pointHoverBackgroundColor' => "#fff",
                            'pointHoverBorderColor' => "rgba(179,181,198,1)",
                            'data' => [65, 59, 90, 81, 56, 55, 40]
                        ],
                    ]
                ]
            ]);
            ?>
        </div>
        <div class="col-lg-6">
            <?= ChartJs::widget([
                'type' => 'bar',
                'options' => [
                    'height' => 400,
                    'width' => 400
                ],
                'data' => [
                    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
                    'datasets' => [
                        [
                            'label' => "My Second dataset",
                            'backgroundColor' => "rgba(255,99,132,0.2)",
                            'borderColor' => "rgba(255,99,132,1)",
                            'pointBackgroundColor' => "rgba(255,99,132,1)",
                            'pointBorderColor' => "#fff",
                            'pointHoverBackgroundColor' => "#fff",
                            'pointHoverBorderColor' => "rgba(255,99,132,1)",
                            'data' => [28, 48, 40, 19, 96, 27, 100]
                        ]
                    ]
                ]
            ]);
            ?>
        </div>
        <div class="col-lg-6">
            <?= ChartJs::widget([
                'type' => 'line',
                'options' => [
                    'height' => 400,
                    'width' => 400
                ],
                'data' => [
                    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
                    'datasets' => [
                        [
                            'label' => "My First dataset",
                            'backgroundColor' => "rgba(179,181,198,0.2)",
                            'borderColor' => "rgba(179,181,198,1)",
                            'pointBackgroundColor' => "rgba(179,181,198,1)",
                            'pointBorderColor' => "#fff",
                            'pointHoverBackgroundColor' => "#fff",
                            'pointHoverBorderColor' => "rgba(179,181,198,1)",
                            'data' => [65, 59, 90, 81, 56, 55, 40]
                        ],
                    ]
                ]
            ]);
            ?>
        </div>
        <div class="col-lg-6">
            <?= ChartJs::widget([
                'type' => 'line',
                'options' => [
                    'height' => 400,
                    'width' => 400
                ],
                'data' => [
                    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
                    'datasets' => [
                        [
                            'label' => "My Second dataset",
                            'backgroundColor' => "rgba(255,99,132,0.2)",
                            'borderColor' => "rgba(255,99,132,1)",
                            'pointBackgroundColor' => "rgba(255,99,132,1)",
                            'pointBorderColor' => "#fff",
                            'pointHoverBackgroundColor' => "#fff",
                            'pointHoverBorderColor' => "rgba(255,99,132,1)",
                            'data' => [28, 48, 40, 19, 96, 27, 100]
                        ]
                    ]
                ]
            ]);
            ?>
        </div>
    </div>
=======
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
>>>>>>> b4594cf7de622c8b051b42d92e4bd593355e6a65
</div>
