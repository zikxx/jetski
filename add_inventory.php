<?php
session_start();
require_once("dbconfig.php");
$type = filter_var($_POST ['type'], FILTER_SANITIZE_STRING);
$registration = filter_var($_POST ['registration'], FILTER_SANITIZE_STRING);
$other = filter_var($_POST ['other'], FILTER_SANITIZE_STRING);
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO inventory(type, registration, other)
	VALUES (:type, :registration, :other)");
	$stmt->bindParam(':type', $type, PDO::PARAM_STR);
	$stmt->bindParam(':registration', $registration, PDO::PARAM_STR);
	$stmt->bindParam(':other', $other, PDO::PARAM_STR);
	$stmt->execute();
	$id = $stmt->fetchAll();
	$id1 = count($id);
	/**
	 * * close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
}
header("Location:inventory.php");
die ();
?>