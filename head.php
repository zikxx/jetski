<?php
session_start ();
date_default_timezone_set ( "Asia/Nicosia" );
require_once 'dbconfig.php';
if (! isset ( $_SESSION ['id'] )) {
	echo 'You are not logged in!';
	header ( 'refresh: 0.3; login.php' );
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Jetski</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link rel="shortcut icon" href="pics/index.ico">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
<script type="text/javascript" src="js/angular.min.js"
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
</head>
<body>
	<div id="load"></div>
	<div id="contents">
		<div class="container-fluid">
			<div class="row">
<?php

if (isset ( $_SESSION ['id'] )) {
	?>
<div class="col-md-offset-1 col-md-10"><?php include"nav_menu.php"?></div>
<?php } ?>