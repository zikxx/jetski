<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 07-Nov-17
 * Time: 12:06 AM
 */
require ("dashboardClass.php");
$servername = "localhost";
$username = "root";
$password = "";
try {
	$conn = new PDO("mysql:host=$servername;dbname=jetski", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch
(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$memberId = "";
$menuId = "";
$submenuId = "";
$subtaskId = "";
$res = $conn->prepare("SELECT * FROM activities WHERE start LIKE '" . date("Y-m-d") . "%'");
$res->fetch(PDO::FETCH_OBJ);
$res->execute();
foreach ($res as $row) {
	$memberId = $row['member_id'];
	$menuId = $row['name'];
	$submenuId = $row['submenu'];
	$subtaskId = $row['subtask'];
}
dashboard($memberId,$menuId,$submenuId,$subtaskId);
?>