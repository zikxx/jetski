<?php
session_start();
require_once("../dbconfig.php");
$submenuName = filter_var($_POST ['submenuName'], FILTER_SANITIZE_STRING);
if ($_POST ['price'] != "") {
	$price = filter_var($_POST ['price'], FILTER_SANITIZE_STRING);
}
else {
	$price = null;
}
if ($_POST['duration'] != "") {
	$duration = filter_var($_POST ['duration'], FILTER_SANITIZE_STRING);
}
else {
	$duration = null;
}
$menuId = filter_var($_POST ['menuId'], FILTER_SANITIZE_STRING);
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO submenu(submenuName, price, duration, menuId)
	VALUES (:submenuName, :price, :duration, :menuId)");
	$stmt->bindParam(':submenuName', $submenuName, PDO::PARAM_STR);
	$stmt->bindParam(':price', $price, PDO::PARAM_STR);
	$stmt->bindParam(':duration', $duration, PDO::PARAM_STR);
	$stmt->bindParam(':menuId', $menuId, PDO::PARAM_STR);
	$stmt->execute();
	/**
	 * * close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
	echo $e->getMessage();
}
header('Location:../submenu.php');
die ();
?>