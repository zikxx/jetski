<?php
session_start();
require_once("../dbconfig.php");
$menuName = filter_var($_POST ['menuName'], FILTER_SANITIZE_STRING);
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO menu(menuName) VALUES (:menuName)");
	$stmt->bindParam(':menuName', $menuName, PDO::PARAM_STR);
	$stmt->execute();
	/**
	 * * close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
	echo $e->getMessage();
}
header('Location:../menu.php');
die ();
?>