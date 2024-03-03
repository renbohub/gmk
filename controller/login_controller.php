<?php
session_start();

include '../env/auth.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Fetch user data based on username
$result = mysqli_query($conn, "SELECT * FROM l_user WHERE username = '$username'");
$userData = mysqli_fetch_assoc($result);

if ($userData && password_verify($password, $userData['password'])) {
    // Passwords match, set the user ID in the session
    $_SESSION['data'] = $userData;
    $_SESSION['status']="login";
    header("location: ../index.php?page=main");
    exit();
} else {
    // Passwords do not match or user not found, deny access
    header("location: ../index.php?page=login&&status=error");
    exit();
}
?>
