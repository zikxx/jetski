<?php
session_start();
require_once("dbconfig.php");
require_once("dashboardClass.php");
$menuId = filter_var($_POST ['menuId'], FILTER_SANITIZE_STRING);
$submenuId = filter_var($_POST ['submenuId'], FILTER_SANITIZE_STRING);
$subtaskId = filter_var($_POST ['subtaskId'], FILTER_SANITIZE_STRING);
if ($subtaskId == '' || (!isset($_POST ['subtaskId']))) {
	$subtaskId = null;
}
$type = filter_var($_POST ['type'], FILTER_SANITIZE_STRING);
if ($type == "Customer") {
	$memberId = null;
	$firstName = filter_var($_POST ['firstName'], FILTER_SANITIZE_STRING);
	$lastName = filter_var($_POST ['lastName'], FILTER_SANITIZE_STRING);
}
else {
	$memberId = filter_var($_POST ['memberId'], FILTER_SANITIZE_STRING);
	$firstName = null;
	$lastName = null;
}
if ($_POST ['driver_checkbox']) {
	$driverId = filter_var($_POST ['driverId'], FILTER_SANITIZE_STRING);
}
else {
	$driverId = null;
}
$price = filter_var($_POST ['price'], FILTER_SANITIZE_STRING);
$payment = filter_var($_POST ['payment'], FILTER_SANITIZE_STRING);
$paidPrice = filter_var($_POST ['paidPrice'], FILTER_SANITIZE_STRING);
$start = filter_var($_POST ['start'], FILTER_SANITIZE_STRING);
if (isset($_POST ['paid'])) {
	$paid = 1;
}
else {
	$paid = 0;
}
$duration = getDurationSetEndTime($submenuId, $subtaskId);
echo $endTime = date("Y-m-d H:i:s", strtotime("+" . $duration . " minutes", strtotime($start)));
try {
	$stmt = $conn->prepare("INSERT INTO activities(menuId, submenuId, subtaskId, type, memberId, firstName,
lastName, driverId, price ,payment, paidPrice, start, end, paid, status)
	VALUES (:menuId, :submenuId, :subtaskId, :type, :memberId, :firstName, :lastName, :driverId, :price, :payment,
	:paidPrice, :start, :end, :paid, 'Active')");
	$stmt->bindParam(':menuId', $menuId, PDO::PARAM_STR);
	$stmt->bindParam(':submenuId', $submenuId, PDO::PARAM_STR);
	$stmt->bindParam(':subtaskId', $subtaskId, PDO::PARAM_STR);
	$stmt->bindParam(':type', $type, PDO::PARAM_STR);
	$stmt->bindParam(':memberId', $memberId, PDO::PARAM_STR);
	$stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
	$stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
	$stmt->bindParam(':driverId', $driverId, PDO::PARAM_STR);
	$stmt->bindParam(':price', $price, PDO::PARAM_STR);
	$stmt->bindParam(':payment', $payment, PDO::PARAM_STR);
	$stmt->bindParam(':paidPrice', $paidPrice, PDO::PARAM_STR);
	$stmt->bindParam(':start', $start, PDO::PARAM_STR);
	$stmt->bindParam(':end', $endTime, PDO::PARAM_STR);
	$stmt->bindParam(':paid', $paid, PDO::PARAM_STR);
	$stmt->execute();
	/**
	 * * close the database connection **
	 */
} catch (PDOException $e) {
	echo $e->getMessage();
}
$conn = null;
echo("Activity created!");
header("Location:../index.php");
die();
?>
