<?php
require_once("../dbconfig.php");
try {
	$stmt = $conn->prepare("DELETE FROM members WHERE id =  :id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	header("Location:../member.php");
} catch (PDOException $e) {
	echo "You can not delete this member because he is assigned to some activity.<br>
	In order to delete member, delete hm from all activities.<br>
	You will be redirected in 3 seconds.";
	header("refresh:3;url=../member.php");
}
?>