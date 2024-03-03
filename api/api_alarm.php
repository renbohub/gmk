<?php
//index.php
header('Content-Type: application/json');
include '../env/auth.php';

$sqlQuery = "SELECT * FROM `event_log` WHERE DATE(date_end) = DATE(NOW())";

$result = mysqli_query($conn, $sqlQuery);

$data = array();

if ($result) {
    // Check if there are rows in the result set
    if (mysqli_num_rows($result) > 0) {
        // Fetch rows and add them to the $data array
        while ($row = mysqli_fetch_assoc($result)) {

            if ($row['name_event']=='true'){
                $tgl_true = [strtotime($row['date_start'])*1000,strtotime($row['date_end'])*1000];
                $array_true[] = array(
                    'x' => $row['name_id'],
                    'y' => $tgl_true
                );                
            }
            if ($row['name_event']=='false'){
                $tgl_false = [strtotime($row['date_start'])*1000,strtotime($row['date_end'])*1000];
                $array_false[] = array(
                    'x' => $row['name_id'],
                    'y' => $tgl_false
                );                
            }

           

        }
       
        
        $data = [$array_true,$array_false];
        
            
    }
    
    mysqli_free_result($result); // Free the result set
} else {
    // Handle the case where the query was not successful
    $data['error'] = mysqli_error($conn);
}

mysqli_close($conn);

echo json_encode($data);
?>
