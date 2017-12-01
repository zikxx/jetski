<?php
session_start();
require_once("../dbconfig.php");
$stmt = $conn->prepare("UPDATE customers SET name=:name, phone=:phone, agreementNo=:agreementNo, other=:other WHERE id=:id");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->bindParam(':name', $_POST ['name'], PDO::PARAM_INT);
$stmt->bindParam(':phone', $_POST ['phone'], PDO::PARAM_STR);
$stmt->bindParam(':agreementNo', $_POST ['agreementNo'], PDO::PARAM_STR);
$stmt->bindParam(':other', $_POST ['other'], PDO::PARAM_STR);
$stmt->execute();
header("Location:../customer.php");
die ();
?>