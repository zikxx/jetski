<?php
session_start();
require_once("../dbconfig.php");
$stmt = $conn->prepare("UPDATE members SET firstName=:firstName, phone=:phone, size=:size, gender=:gender, shoeSize=:shoeSize, other=:other
		WHERE id=:id");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->bindParam(':firstName', $_POST ['firstName'], PDO::PARAM_INT);
$stmt->bindParam(':phone', $_POST ['phone'], PDO::PARAM_STR);
$stmt->bindParam(':size', $_POST ['size'], PDO::PARAM_STR);
$stmt->bindParam(':gender', $_POST ['gender'], PDO::PARAM_STR);
$stmt->bindParam(':shoeSize', $_POST ['shoeSize'], PDO::PARAM_STR);
$stmt->bindParam(':other', $_POST ['other'], PDO::PARAM_STR);
$stmt->execute();
header("Location:../member.php");
die ();
?>