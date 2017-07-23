<?php
session_start ();
require_once ("dbconfig.php");
$name = filter_var ( $_POST ['name'], FILTER_SANITIZE_STRING );
$submenu = filter_var ( $_POST ['submenu'], FILTER_SANITIZE_STRING );
$subtask = filter_var ( $_POST ['subtask'], FILTER_SANITIZE_STRING );
$price = filter_var ( $_POST ['price'], FILTER_SANITIZE_STRING );
$payment = filter_var ( $_POST ['payment'], FILTER_SANITIZE_STRING );
$start = filter_var ( $_POST ['start'], FILTER_SANITIZE_STRING );
$end = filter_var ( $_POST ['end'], FILTER_SANITIZE_STRING );
$paid_price = filter_var ( $_POST ['paid_price'], FILTER_SANITIZE_STRING );
$driver = filter_var ( $_POST ['driver'], FILTER_SANITIZE_STRING );
$first_name = filter_var ( $_POST ['first_name'], FILTER_SANITIZE_STRING );
$last_name = filter_var ( $_POST ['last_name'], FILTER_SANITIZE_STRING );
$paid = filter_var ( $_POST ['paid'], FILTER_SANITIZE_STRING );
$type = filter_var ( $_POST ['type'], FILTER_SANITIZE_STRING );

try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	
	/**
	 * * INSERT data **
	 */
	$stmt = $dbh->prepare ( "INSERT INTO activities(name, submenu, subtask, price, payment, start, end, paid_price, driver, first_name, last_name, paid, type, status)
	VALUES (:name, :submenu, :subtask, :price, :payment, :start, DATE_ADD(:start, INTERVAL :end MINUTE), :paid_price, :driver, :first_name, :last_name, :paid, :type, 'Active')" );
	
	$stmt->bindParam ( ':name', $name, PDO::PARAM_STR );
	$stmt->bindParam ( ':submenu', $submenu, PDO::PARAM_STR );
	$stmt->bindParam ( ':subtask', $subtask, PDO::PARAM_STR );
	$stmt->bindParam ( ':price', $price, PDO::PARAM_STR );
	$stmt->bindParam ( ':payment', $payment, PDO::PARAM_STR );
	$stmt->bindParam ( ':start', $start, PDO::PARAM_STR );
	$stmt->bindParam ( ':end', $end, PDO::PARAM_STR );
	$stmt->bindParam ( ':paid_price', $paid_price, PDO::PARAM_STR );
	$stmt->bindParam ( ':driver', $driver, PDO::PARAM_STR );
	$stmt->bindParam ( ':first_name', $first_name, PDO::PARAM_STR );
	$stmt->bindParam ( ':last_name', $last_name, PDO::PARAM_STR );
	$stmt->bindParam ( ':paid', $paid, PDO::PARAM_STR );
	$stmt->bindParam ( ':type', $type, PDO::PARAM_STR );
	
	$stmt->execute ();
	
	$id = $stmt->fetchAll ();
	$id1 = count ( $id );
	/**
	 * * close the database connection **
	 */
	$dbh = null;
} catch ( PDOException $e ) {
}
header ( "Location:index.php" );
die ();
?>