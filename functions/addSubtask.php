<?php
session_start();
require_once("../dbconfig.php");
$subtaskName = filter_var($_POST ['subtaskName'], FILTER_SANITIZE_STRING);
$price = filter_var($_POST ['price'], FILTER_SANITIZE_STRING);
$duration = filter_var($_POST ['duration'], FILTER_SANITIZE_STRING);
$submenuId = filter_var($_POST ['submenuId'], FILTER_SANITIZE_STRING);
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO subtask(subtaskName, price, duration, submenuId)
	VALUES (:subtaskName, :price, :duration, :submenuId)");
	$stmt->bindParam(':subtaskName', $subtaskName, PDO::PARAM_STR);
	$stmt->bindParam(':price', $price, PDO::PARAM_STR);
	$stmt->bindParam(':duration', $duration, PDO::PARAM_STR);
	$stmt->bindParam(':submenuId', $submenuId, PDO::PARAM_STR);
	$stmt->execute();
	/**
	 * * close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
	echo $e->getMessage();
}
header('refresh: 1;../subtask.php');
die ();
?>