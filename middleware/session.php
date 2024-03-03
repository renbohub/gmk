<?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location: index.php?page=login&&status=belum_login");
  }


// if ($_SESSION['data']['data']['project_id']==2) {
//     if($id != $_SESSION['data']['data']['project_id']){
//         header("location: index.php?page=403");
//     }
// }
// if ($_SESSION['data']['data']['project_id']==1) {
//     if($id != $_SESSION['data']['data']['project_id']){
//         header("location: index.php?page=403");
//     }
// }

?>