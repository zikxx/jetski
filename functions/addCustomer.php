<?php
session_start();
require_once("../dbconfig.php");
$name = filter_var($_POST ['name'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST ['phone'], FILTER_SANITIZE_STRING);
$agreementNo = filter_var($_POST ['agreementNo'], FILTER_SANITIZE_STRING);
$other = filter_var($_POST ['other'], FILTER_SANITIZE_STRING);
$regDate = date("Y-m-d H:i:s");
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO customers(name, phone, agreementNo, other, regDate)
	VALUES (:name, :phone, :agreementNo, :other, :regDate)");
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
	$stmt->bindParam(':agreementNo', $agreementNo, PDO::PARAM_STR);
	$stmt->bindParam(':other', $other, PDO::PARAM_STR);
	$stmt->bindParam(':regDate', $regDate, PDO::PARAM_STR);
	$stmt->execute();
	$id = $stmt->fetchAll();
	$id1 = count($id);
	/**
	 * * close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
}
header("Location:../customer.php");
die ();
?>