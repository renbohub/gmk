<?php 
// mengaktifkan session php
header('Content-Type: application/json');

// menghubungkan dengan koneksi
include '../env/auth.php';


$data_graphic = mysqli_query($conn,"select * from t_tanki_graphic order by id asc");



$graph = [];
foreach ($data_graphic as $row1){
    $graph[] = $row1;
}


$layout['graphic'] = $graph;
print json_encode($layout);

?>
