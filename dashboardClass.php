<?php
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
function dashboard($memberId, $menuId, $submenuId, $subtaskId)
{
	getMember($memberId);
	getMenu($menuId);
	getSubmenu($submenuId);
	getSubtask($subtaskId);
}

function getMember($memberId)
{
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
	$res = $conn->prepare("SELECT * FROM members m
JOIN activities a ON m.id = a.member_id
WHERE a.member_id = '" . $memberId . "'");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	foreach ($res as $row) {
		echo $name = $row['first_name'];
	}
}

function getMenu($menuId)
{
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
	$res = $conn->prepare("SELECT * FROM menu m
JOIN activities a ON m.id = a.name
WHERE a.name = '" . $menuId . "'");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	foreach ($res as $row) {
		echo $name = $row['name'];
	}
}

function getSubmenu($submenuId)
{
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
	$res = $conn->prepare("SELECT * FROM submenu m
JOIN activities a ON m.id = a.submenu
WHERE a.submenu = '" . $submenuId . "'");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	foreach ($res as $row) {
		echo $name = $row['submenu_name'];
	}
}

function getSubtask($subtaskId)
{
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
	$res = $conn->prepare("SELECT * FROM submenu m
JOIN activities a ON m.id = a.subtask
WHERE a.subtask = '" . $subtaskId . "'");
	$res->fetch(PDO::FETCH_OBJ);
	$res->execute();
	foreach ($res as $row) {
		echo $name = $row['subtask_name'];
	}
}

?>