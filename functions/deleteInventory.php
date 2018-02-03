<?php
require_once("../dbconfig.php");
try {
	$stmt = $conn->prepare("DELETE FROM inventory WHERE id =  :id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	header("Location:../inventory.php");
} catch (PDOException $e) {
	echo "You can not delete this inventory because it is used.<br>You will be redirected in 3 seconds.";
	header("refresh:3;url=../inventory.php");
}
?>