<?php
/*** begin our session ***/
session_start();
/**
 * * check if the users is already logged in **
 */
if (isset ($_SESSION ['id'])) {
	$message = 'You are already logged in.';
	header("refresh: 1;index.php");
}
/**
 * * check that both the username, password have been submitted **
 */
if (!isset ($_POST ['user'], $_POST ['pass'])) {
	$message = 'You must be logged in to view this page.';
	header("refresh: 1;login.php");
}
/**
 * * check the username has only alpha numeric characters **
 */
elseif (ctype_alnum($_POST ['user']) != true) {
	/**
	 * * if there is no match **
	 */
	$message = "Username must be alpha numeric";
	header("refresh: 1;login.php");
}
/**
 * * check the password has only alpha numeric characters **
 */
elseif (ctype_alnum($_POST ['pass']) != true) {
	/**
	 * * if there is no match **
	 */
	$message = "Password must be alpha numeric";
	header("refresh: 1;login.php");
}
else {
	/**
	 * * if we are here the data is valid and we can insert it into database **
	 */
	$user = filter_var($_POST ['user'], FILTER_SANITIZE_STRING);
	$pass = filter_var($_POST ['pass'], FILTER_SANITIZE_STRING);
	/**
	 * * now we can encrypt the password **
	 */
	// $pass = sha1( $pass );
	try {
		require_once 'dbconfig.php';
		/**
		 * * $message = a message saying we have connected **
		 */
		/**
		 * * set the error mode to excptions **
		 */
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		/**
		 * * prepare the select statement **
		 */
		$stmt = $conn->prepare("SELECT * FROM users
                    WHERE username = :user AND password = :pass");
		/**
		 * * bind the parameters **
		 */
		$stmt->bindParam(':user', $user, PDO::PARAM_STR);
		$stmt->bindParam(':pass', $pass, PDO::PARAM_STR, 40);
		/**
		 * * execute the prepared statement **
		 */
		$stmt->execute();
		/**
		 * * check for a result **
		 */
		$id = $stmt->fetchAll();
		$id1 = count($id);
		/**
		 * * if we do have a result, all is well **
		 */
		if ($id1 > 0) {
			/**
			 * * set the session id variable **
			 */
			$_SESSION ['id'] = $id;
			$_SESSION ['user'] = $user;
			echo $message = 'Succesfully logged in!';
			header('refresh: 1;index.php');
			die ();
		}
		/**
		 * * if we have no result then fail boat **
		 */
		else {
			/**
			 * * tell the user we are not logged in **
			 */
			echo $message = 'Wrong Username or Password!';
			header('refresh: 1;login.php');
			die ();
		}
	} catch (Exception $e) {
		/**
		 * * if we are here, something has gone wrong with the database **
		 */
		$message = 'We are unable to process your request. Please try again later"';
		header("refresh: 1;login.php");
	}
}
?>
<html>
<head>
	<title>Login</title>
</head>
<body>
<p><?php echo $message; ?>
</body>
</html>