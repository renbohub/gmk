<?php 

// nama host, Username, password dan nama database
$conn = mysqli_connect("10.10.10.95", "iotadmink", "ztH(fF4R7Ku@^d", "tanki_iot_2024");
// Periksa Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>