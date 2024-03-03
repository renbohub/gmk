<style>
     .floating-toggle {
      position: fixed;
      top: 90vh;
      right: 20px;
      z-index: 1000; /* Ensure it appears above other elements on the page */
    }
</style>


<?php 

$pagename = $_GET['page'];


if ($pagename == '') {
	header('location:index.php?page=main');
	}

if ($pagename == 'main') {
	// include 'middleware/session.php';
	include 'resources/pages/v_main.php';
}

if ($pagename == 'login') {
	include 'resources/pages/v_login.php';
}

if ($pagename == 'setting') {
	// include 'middleware/session.php';
	include 'resources/pages/v_setting.php';
}

if ($pagename == '403') {
	include 'resources/pages/v_403.php';
}

if ($pagename == 'dashboard') {
	// include 'middleware/session.php';
	include 'resources/pages/v_dashboard.php';
}

if ($pagename == 'oee') {
	// include 'middleware/session.php';
	include 'resources/pages/v_oee.php';
}

if ($pagename == 'report') {
	// include 'middleware/session.php';
	include 'resources/pages/v_report.php';
}

if ($pagename == 'office') {
	// include 'middleware/session.php';
	include 'resources/pages/v_office.php';
}

if ($pagename == 'line') {
	// include 'middleware/session.php';
	include 'resources/pages/v_line.php';
}

if ($pagename == 'alarm') {
	// include 'middleware/session.php';
	include 'resources/pages/v_alarm.php';
}

if ($pagename == 'register') {
	// include 'middleware/session.php';
	include 'resources/pages/v_signup.php';
}


if ($pagename !== '' and $pagename !== 'main' and $pagename !== 'setting' and $pagename !== 'register' and $pagename !== 'login' and  $pagename !== 'dashboard' and  $pagename !== 'report' and  $pagename !== '403' and  $pagename !== 'oee'and  $pagename !== 'office' and $pagename !== 'line' and $pagename !== 'alarm') {
	include 'resources/pages/v_403.php';
}



?>
  