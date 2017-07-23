<?php
session_start ();
require_once ("dbconfig.php");
$name = filter_var ( $_POST ['name'], FILTER_SANITIZE_STRING );
$submenu = filter_var ( $_POST ['submenu'], FILTER_SANITIZE_STRING );

try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	
	/**
	 * * INSERT data **
	 */
	$stmt = $dbh->prepare ( "INSERT INTO subtask(subtask_name, submenu_id)
	VALUES (:subtask_name, :submenu_id)" );
	
	$stmt->bindParam ( ':subtask_name', $name, PDO::PARAM_STR );
	$stmt->bindParam ( ':submenu_id', $submenu, PDO::PARAM_STR );
	
	$stmt->execute ();
	
	$id = $stmt->fetchAll ();
	$id1 = count ( $id );
	echo $id1;
	/**
	 * * close the database connection **
	 */
	$dbh = null;
} catch ( PDOException $e ) {
	echo $e->getMessage ();
}
header ( 'refresh: 3;index.php' );
die ();
?>