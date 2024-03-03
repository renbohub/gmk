<?php 
// mengaktifkan session php
header('Content-Type: application/json');

// menghubungkan dengan koneksi
$conn = mysqli_connect("lestariautomation.com", "u9914593_sahril", "allyoucan#34T", "u9914593_iotdemo");

$data_session = mysqli_query($conn,"select * from control_lamp join PowerReal ON control_lamp.id = PowerReal.id WHERE control_lamp.id = 1");
$data_graphic = mysqli_query($conn,"select * from l1_hourly Order By id DESC limit 24");
$data_graphic1 = mysqli_query($conn,"select * from l2_hourly Order By id DESC limit 24");


$number = [];
foreach ($data_session as $row){
    $number[] = $row;
}


$graph = [];
foreach ($data_graphic as $row1){
    $graph[] = $row1;
}

$graph2 = [];
foreach ($data_graphic1 as $row2){
    $graph2[] = $row2;
}

$layout['number'] = $number;
$layout['graphic'] = $graph;
$layout['graphic2'] = $graph2;

 print json_encode($layout);

?>
