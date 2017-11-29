<?php
session_start();
require_once("dbconfig.php");
require_once("dashboardClass.php");
$menu_id = filter_var($_POST ['menu_id'], FILTER_SANITIZE_STRING);
$submenu_id = filter_var($_POST ['submenu_id'], FILTER_SANITIZE_STRING);
$subtask_id = filter_var($_POST ['subtask_id'], FILTER_SANITIZE_STRING);
if ($subtask_id == '' || (!isset($_POST ['subtask_id']))) {
	$subtask_id = null;
}
$type = filter_var($_POST ['type'], FILTER_SANITIZE_STRING);
if ($type == "Customer") {
	$member_id = null;
	$first_name = filter_var($_POST ['first_name'], FILTER_SANITIZE_STRING);
	$last_name = filter_var($_POST ['last_name'], FILTER_SANITIZE_STRING);
}
else {
	$member_id = filter_var($_POST ['member_id'], FILTER_SANITIZE_STRING);
	$first_name = null;
	$last_name = null;
}
if ($_POST ['driver_checkbox']) {
	$driver_id = filter_var($_POST ['driver_id'], FILTER_SANITIZE_STRING);
}
else {
	$driver_id = null;
}
$price = filter_var($_POST ['price'], FILTER_SANITIZE_STRING);
$payment = filter_var($_POST ['payment'], FILTER_SANITIZE_STRING);
$paid_price = filter_var($_POST ['paid_price'], FILTER_SANITIZE_STRING);
$start = filter_var($_POST ['start'], FILTER_SANITIZE_STRING);
if (isset($_POST ['paid'])) {
	$paid = 1;
}
else {
	$paid = 0;
}
$duration = getDurationSetEndTime($submenu_id, $subtask_id);
echo $endTime = date("Y-m-d H:i:s", strtotime("+" . $duration . " minutes", strtotime($start)));
try {
	$stmt = $conn->prepare("INSERT INTO activities(menu_id, submenu_id, subtask_id, type, member_id, first_name,
last_name, driver_id, price ,payment, paid_price, start, end, paid, status)
	VALUES (:menu_id, :submenu_id, :subtask_id, :type, :member_id, :first_name, :last_name, :driver_id, :price, :payment,
	:paid_price, :start, :end, :paid, 'Active')");
	$stmt->bindParam(':menu_id', $menu_id, PDO::PARAM_STR);
	$stmt->bindParam(':submenu_id', $submenu_id, PDO::PARAM_STR);
	$stmt->bindParam(':subtask_id', $subtask_id, PDO::PARAM_STR);
	$stmt->bindParam(':type', $type, PDO::PARAM_STR);
	$stmt->bindParam(':member_id', $member_id, PDO::PARAM_STR);
	$stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
	$stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
	$stmt->bindParam(':driver_id', $driver_id, PDO::PARAM_STR);
	$stmt->bindParam(':price', $price, PDO::PARAM_STR);
	$stmt->bindParam(':payment', $payment, PDO::PARAM_STR);
	$stmt->bindParam(':paid_price', $paid_price, PDO::PARAM_STR);
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