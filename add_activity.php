<?php
session_start();
require_once("dbconfig.php");
$name = filter_var($_POST ['name'], FILTER_SANITIZE_STRING);
$submenu = filter_var($_POST ['submenu'], FILTER_SANITIZE_STRING);
$subtask = filter_var($_POST ['subtask'], FILTER_SANITIZE_STRING);
$inflatables = filter_var($_POST ['inflatables'], FILTER_SANITIZE_STRING);
$type = filter_var($_POST ['type'], FILTER_SANITIZE_STRING);
$member_id = filter_var($_POST ['member_id'], FILTER_SANITIZE_STRING);
$first_name = filter_var($_POST ['first_name'], FILTER_SANITIZE_STRING);
$last_name = filter_var($_POST ['last_name'], FILTER_SANITIZE_STRING);
$driver = filter_var($_POST ['driver'], FILTER_SANITIZE_STRING);
$price = filter_var($_POST ['price'], FILTER_SANITIZE_STRING);
$payment = filter_var($_POST ['payment'], FILTER_SANITIZE_STRING);
$paid_price = filter_var($_POST ['paid_price'], FILTER_SANITIZE_STRING);
$start = filter_var($_POST ['start'], FILTER_SANITIZE_STRING);
$paid = filter_var($_POST ['paid'], FILTER_SANITIZE_STRING);
try {
	/**
	 * * echo a message saying we have connected **
	 */

	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO activities(name, submenu, subtask, inflatables, type,member_id,first_name,
last_name,driver,price,payment,paid_price,start,paid,status)
	VALUES (:name, :submenu, :subtask,:inflatables,
	:type,:member_id,:first_name,:last_name,:driver,:price,:payment,:paid_price,:start,:paid, 'Active')");
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':submenu', $submenu, PDO::PARAM_STR);
	$stmt->bindParam(':subtask', $subtask, PDO::PARAM_STR);
	$stmt->bindParam(':inflatables', $inflatables, PDO::PARAM_STR);
	$stmt->bindParam(':type', $type, PDO::PARAM_STR);
	$stmt->bindParam(':member_id', $member_id, PDO::PARAM_STR);
	$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
	$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
	$stmt->bindParam(':driver', $driver, PDO::PARAM_STR);
	$stmt->bindParam(':price', $price, PDO::PARAM_STR);
	$stmt->bindParam(':payment', $payment, PDO::PARAM_STR);
	$stmt->bindParam(':paid_price', $paid_price, PDO::PARAM_STR);
	$stmt->bindParam(':start', $start, PDO::PARAM_STR);
	$stmt->bindParam(':paid', $paid, PDO::PARAM_STR);
	$stmt->execute();
	/**
	 * * close the database connection **
	 */
} catch (PDOException $e) {
	echo $e->getMessage();
}
$conn = null;
echo ("Activity created!");
header('refresh:1;activity.php');
die();
?>