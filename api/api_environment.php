<?php 
// mengaktifkan session php
header('Content-Type: application/json');

// menghubungkan dengan koneksi
include '../env/auth.php';

$data_session = mysqli_query($conn,"select * from log_environment");
$data_graphic = mysqli_query($conn,"select * from log_environment_30 order by log_env_id desc limit 40 ");

$number = [];
foreach ($data_session as $row){
    $number[] = $row;
}

$graph = [];
foreach ($data_graphic as $row1){
    $graph[] = $row1;
}

$layout['number'] = $number;
$layout['graphic'] = $graph;
 print json_encode($layout);

?>
