<?php
session_start();
require_once("../dbconfig.php");
$firstName = filter_var($_POST ['firstName'], FILTER_SANITIZE_STRING);
$lastName = filter_var($_POST ['lastName'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST ['phone'], FILTER_SANITIZE_STRING);
$size = filter_var($_POST ['size'], FILTER_SANITIZE_STRING);
$gender = filter_var($_POST ['gender'], FILTER_SANITIZE_STRING);
$shoeSize = filter_var($_POST ['shoeSize'], FILTER_SANITIZE_STRING);
$weight = filter_var($_POST ['weight'], FILTER_SANITIZE_STRING);
$age = filter_var($_POST ['age'], FILTER_SANITIZE_STRING);
$status = filter_var($_POST ['status'], FILTER_SANITIZE_STRING);
$emergencyContact = filter_var($_POST ['emergencyContact'], FILTER_SANITIZE_STRING);
$address = filter_var($_POST ['address'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST ['email'], FILTER_SANITIZE_STRING);
$storage1 = filter_var($_POST ['storage1'], FILTER_SANITIZE_STRING);
$storage2 = filter_var($_POST ['storage2'], FILTER_SANITIZE_STRING);
$storage3 = filter_var($_POST ['storage3'], FILTER_SANITIZE_STRING);
$other = filter_var($_POST ['other'], FILTER_SANITIZE_STRING);
$prepaid = filter_var($_POST ['prepaid'], FILTER_SANITIZE_STRING);
$regDate = date("Y-m-d H:i:s");
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO members(firstName, lastName, phone, size, gender, shoeSize ,weight, age, status,
	emergencyContact, address, email, storage1, storage2, storage3, other, prepaid, regDate)
	VALUES (:firstName, :lastName, :phone, :size, :gender, :shoeSize, :weight, :age, :status, :emergencyContact, 
	:address, :email, :storage1, :storage2, :storage3, :other, :prepaid, :regDate)");
	$stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
	$stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
	$stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
	$stmt->bindParam(':size', $size, PDO::PARAM_STR);
	$stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
	$stmt->bindParam(':shoeSize', $shoeSize, PDO::PARAM_STR);
	$stmt->bindParam(':weight', $weight, PDO::PARAM_STR);
	$stmt->bindParam(':age', $age, PDO::PARAM_STR);
	$stmt->bindParam(':status', $status, PDO::PARAM_STR);
	$stmt->bindParam(':emergencyContact', $emergencyContact, PDO::PARAM_STR);
	$stmt->bindParam(':address', $address, PDO::PARAM_STR);
	$stmt->bindParam(':email', $email, PDO::PARAM_STR);
	$stmt->bindParam(':storage1', $storage1, PDO::PARAM_STR);
	$stmt->bindParam(':storage2', $storage2, PDO::PARAM_STR);
	$stmt->bindParam(':storage3', $storage3, PDO::PARAM_STR);
	$stmt->bindParam(':other', $other, PDO::PARAM_STR);
	$stmt->bindParam(':prepaid', $prepaid, PDO::PARAM_STR);
	$stmt->bindParam(':regDate', $regDate, PDO::PARAM_STR);
	$stmt->execute();
	$id = $stmt->fetchAll();
	$id1 = count($id);
	/**
	 ** close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
}
header("Location:../member.php");
die ();
?>