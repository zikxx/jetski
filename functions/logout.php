<?php
// Begin the session
session_start();
?>
	<html>
	<head>
		<title>Logged Out</title>
	</head>
	<body>
	<?php
	// Unset all of the session variables.
	session_unset();
	// Destroy the session.
	session_destroy();
	?>
	<h1>You are now logged out. Please come again</h1>
	</body>
	</html>
<?php header("Location:../login.php"); ?>