<?php
session_start();
require_once("../dbconfig.php");
$name = filter_var($_POST ['name'], FILTER_SANITIZE_STRING);
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO menu(menu_name) VALUES (:menu_name)");
	$stmt->bindParam(':menu_name', $name, PDO::PARAM_STR);
	$stmt->execute();
	$id = $stmt->fetchAll();
	$id1 = count($id);
	echo $id1;
	/**
	 * * close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
	echo $e->getMessage();
}
header('refresh: 1;../index.php');
die ();
?>