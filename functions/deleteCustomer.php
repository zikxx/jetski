<?php
require_once("../dbconfig.php");
try {
	$stmt = $conn->prepare("DELETE FROM customers WHERE id =  :id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	header("Location:../customer.php");
} catch (PDOException $e) {
	echo "You can not delete this customer because it is parent of some records.<br>You will be redirected in 3 seconds.";
	header("refresh:3;url=../customer.php");
}
?>