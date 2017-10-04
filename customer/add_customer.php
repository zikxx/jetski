<?php
session_start();
require_once("dbconfig.php");
$name = filter_var($_POST ['name'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST ['phone'], FILTER_SANITIZE_STRING);
$agreement_no = filter_var($_POST ['agreement_no'], FILTER_SANITIZE_STRING);
$other = filter_var($_POST ['other'], FILTER_SANITIZE_STRING);
$reg_date = date("Y-m-d H:i:s");
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO customers(name, phone, agreement_no, other, reg_date)
	VALUES (:name, :phone, :agreement_no, :other, :reg_date)");
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
	$stmt->bindParam(':agreement_no', $agreement_no, PDO::PARAM_STR);
	$stmt->bindParam(':other', $other, PDO::PARAM_STR);
	$stmt->bindParam(':reg_date', $reg_date, PDO::PARAM_STR);
	$stmt->execute();
	$id = $stmt->fetchAll();
	$id1 = count($id);
	/**
	 * * close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
}
header("Location:customer.php");
die ();
?>