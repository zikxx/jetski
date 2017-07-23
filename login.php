<?php
session_start ();
date_default_timezone_set ( "Asia/Nicosia" );
require_once 'dbconfig.php';
if (isset ( $_SESSION ['id'] )) {
	echo 'You are already logged in!';
	header ( 'refresh: 0.3; index.php' );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link rel="shortcut icon" href="pics/index.ico">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/delault.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/default.js"></script>
<style>
#load {
	width: 100%;
	height: 100%;
	position: fixed;
	z-index: 9999;
	background: url("pics/loading.gif") no-repeat center center
		rgba(36, 51, 66, 1);
}

body {
	color: white;
	background-color: rgba(36, 51, 66, 1);
}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-4 col-md-4" style="text-align: center;">
				<h2>Login:</h2>
				<form method="POST" action="start.php">
					<div class="form-group">
						<label>Username:</label><input type="text" class="form-control"
							id="user" name="user">
					</div>
					<div class="form-group">
						<label>Password:</label><input type="password"
							class="form-control" id="pass" name="pass">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>