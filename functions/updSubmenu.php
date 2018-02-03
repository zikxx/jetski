<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 02-Feb-18
 * Time: 11:50 PM
 */
session_start();
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
require_once("../dbconfig.php");
$stmt = $conn->prepare("UPDATE submenu SET submenuName=:submenuName, price=:price, duration=:duration, menuId=:menuId
 WHERE id=:id");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->bindParam(':submenuName', $_POST ['submenuName'], PDO::PARAM_INT);
$stmt->bindParam(':price', $price, PDO::PARAM_INT);
$stmt->bindParam(':duration', $duration, PDO::PARAM_INT);
$stmt->bindParam(':menuId', $_POST ['menuId'], PDO::PARAM_INT);
$stmt->execute();
header("Location:../submenu.php");
die ();
?>