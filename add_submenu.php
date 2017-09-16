<?php
session_start();
require_once("dbconfig.php");
$name = filter_var($_POST ['name'], FILTER_SANITIZE_STRING);
$menu = filter_var($_POST ['menu'], FILTER_SANITIZE_STRING);
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $dbh->prepare("INSERT INTO submenu(submenu_name, menu_id)
	VALUES (:submenu_name, :menu_id)");
	$stmt->bindParam(':submenu_name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':menu_id', $menu, PDO::PARAM_STR);
	$stmt->execute();
	$id = $stmt->fetchAll();
	$id1 = count($id);
	echo $id1;
	/**
	 * * close the database connection **
	 */
	$dbh = null;
} catch (PDOException $e) {
	echo $e->getMessage();
}
header('refresh: 3;index.php');
die ();
?>