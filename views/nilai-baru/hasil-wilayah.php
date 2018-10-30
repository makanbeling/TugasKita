<?php
/**
 * Created by PhpStorm.
 * User: rommel
 * Date: 31/10/2018
 * Time: 1:44
 */

use app\models\NilaiBaru;
use dosamigos\chartjs\ChartJs;

var_dump($data_i24,$data_i1dan4);
/*$nama = [];

$data = [];
//var_dump($data_f02);
$obj = new NilaiBaru();

$arrFields = array_keys($obj->attributes);

for ($i = 7; $i < 43; $i++) {
    //$nama[] = $arrFields[$i];
    $nama[] = $i-6;
    $data[] = $data_i[$arrFields[$i]];
}*/
?>

<div class="col-lg-12">
    <!--    --><?php
    //    foreach ($data_i24 as $value => $val) {
    //        echo "$val <br>";
    //    }
    /*echo ChartJs::widget([
        'type' => 'bar',
        'options' => [
            'height' => 400,
            'width' => 800
        ],
        'data' => [
            'labels' => $nama,
            'datasets' => [
                [
                    'label' => $data_f02['unit_layanan'].' '.$data_f02['prov_kab_kot'],
                    'backgroundColor' => "rgba(255,99,132,0.2)",
                    'borderColor' => "rgba(255,99,132,1)",
                    'pointBackgroundColor' => "rgba(255,99,132,1)",
                    'pointBorderColor' => "#fff",
                    'pointHoverBackgroundColor' => "#fff",
                    'pointHoverBorderColor' => "rgba(255,99,132,1)",
                    'data' => $data,
                ]
            ]
        ]]);
    */?>

</div>
