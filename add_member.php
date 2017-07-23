<?php
session_start ();
require_once ("dbconfig.php");
$first_name = filter_var ( $_POST ['first_name'], FILTER_SANITIZE_STRING );
$last_name = filter_var ( $_POST ['last_name'], FILTER_SANITIZE_STRING );
$phone = filter_var ( $_POST ['phone'], FILTER_SANITIZE_STRING );
$size = filter_var ( $_POST ['size'], FILTER_SANITIZE_STRING );
$gender = filter_var ( $_POST ['gender'], FILTER_SANITIZE_STRING );
$shoe_size = filter_var ( $_POST ['shoe_size'], FILTER_SANITIZE_STRING );
$weight = filter_var ( $_POST ['weight'], FILTER_SANITIZE_STRING );
$age = filter_var ( $_POST ['age'], FILTER_SANITIZE_STRING );
$status = filter_var ( $_POST ['status'], FILTER_SANITIZE_STRING );
$emergency_contact = filter_var ( $_POST ['emergency_contact'], FILTER_SANITIZE_STRING );
$address = filter_var ( $_POST ['address'], FILTER_SANITIZE_STRING );
$email = filter_var ( $_POST ['email'], FILTER_SANITIZE_STRING );
$storage_1 = filter_var ( $_POST ['storage_1'], FILTER_SANITIZE_STRING );
$storage_2 = filter_var ( $_POST ['storage_2'], FILTER_SANITIZE_STRING );
$storage_3 = filter_var ( $_POST ['storage_3'], FILTER_SANITIZE_STRING );
$other = filter_var ( $_POST ['other'], FILTER_SANITIZE_STRING );
$prepaid = filter_var ( $_POST ['prepaid'], FILTER_SANITIZE_STRING );
$reg_date = date ( "Y-m-d H:i:s" );

try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	
	/**
	 * * INSERT data **
	 */
	$stmt = $dbh->prepare ( "INSERT INTO members(first_name, last_name, phone, size, gender, shoe_size ,weight, age, status,
	emergency_contact, address, email, storage_1, storage_2, storage_3, other, prepaid, reg_date)
	VALUES (:first_name, :last_name, :phone, :size, :gender, :shoe_size, :weight, :age, :status, :emergency_contact, 
	:address, :email, :storage_1, :storage_2, :storage_3, :other, :prepaid, :reg_date)" );
	
	$stmt->bindParam ( ':first_name', $first_name, PDO::PARAM_STR );
	$stmt->bindParam ( ':last_name', $last_name, PDO::PARAM_STR );
	$stmt->bindParam ( ':phone', $phone, PDO::PARAM_STR );
	$stmt->bindParam ( ':size', $size, PDO::PARAM_STR );
	$stmt->bindParam ( ':gender', $gender, PDO::PARAM_STR );
	$stmt->bindParam ( ':shoe_size', $shoe_size, PDO::PARAM_STR );
	$stmt->bindParam ( ':weight', $weight, PDO::PARAM_STR );
	$stmt->bindParam ( ':age', $age, PDO::PARAM_STR );
	$stmt->bindParam ( ':status', $status, PDO::PARAM_STR );
	$stmt->bindParam ( ':emergency_contact', $emergency_contact, PDO::PARAM_STR );
	$stmt->bindParam ( ':address', $address, PDO::PARAM_STR );
	$stmt->bindParam ( ':email', $email, PDO::PARAM_STR );
	$stmt->bindParam ( ':storage_1', $storage_1, PDO::PARAM_STR );
	$stmt->bindParam ( ':storage_2', $storage_2, PDO::PARAM_STR );
	$stmt->bindParam ( ':storage_3', $storage_3, PDO::PARAM_STR );
	$stmt->bindParam ( ':other', $other, PDO::PARAM_STR );
	$stmt->bindParam ( ':prepaid', $prepaid, PDO::PARAM_STR );
	$stmt->bindParam ( ':reg_date', $reg_date, PDO::PARAM_STR );
	
	$stmt->execute ();
	
	$id = $stmt->fetchAll ();
	$id1 = count ( $id );
	/**
	 * * close the database connection **
	 */
	$dbh = null;
} catch ( PDOException $e ) {
}
header ( "Location:member.php" );
die ();
?>