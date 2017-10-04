<?php
session_start();
require_once("dbconfig.php");
$stmt = $conn->prepare("UPDATE members SET first_name=:first_name, phone=:phone, size=:size, gender=:gender, shoe_size=:shoe_size, other=:other
		WHERE id=:id");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->bindParam(':first_name', $_POST ['first_name'], PDO::PARAM_INT);
$stmt->bindParam(':phone', $_POST ['phone'], PDO::PARAM_STR);
$stmt->bindParam(':size', $_POST ['size'], PDO::PARAM_STR);
$stmt->bindParam(':gender', $_POST ['gender'], PDO::PARAM_STR);
$stmt->bindParam(':shoe_size', $_POST ['shoe_size'], PDO::PARAM_STR);
$stmt->bindParam(':other', $_POST ['other'], PDO::PARAM_STR);
$stmt->execute();
header("Location:member.php");
die ();
?>