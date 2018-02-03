<?php
require_once("../dbconfig.php");
try {
	$stmt = $conn->prepare("DELETE FROM driversShippers WHERE id =  :id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	header("Location:../driver.php");
} catch (PDOException $e) {
	echo "You can not delete this driver because he is driver for some activity.<br>
	You must remove this driver from all activities in order to delete.<br>You will be redirected in 5 seconds.";
	header("refresh:5;url=../driver.php");
}

?>