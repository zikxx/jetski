<?php
session_start();
require_once("dbconfig.php");
$stmt = $dbh->prepare("UPDATE customers SET name=:name, phone=:phone, agreement_no=:agreement_no, other=:other WHERE id=:id");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->bindParam(':name', $_POST ['name'], PDO::PARAM_INT);
$stmt->bindParam(':phone', $_POST ['phone'], PDO::PARAM_STR);
$stmt->bindParam(':agreement_no', $_POST ['agreement_no'], PDO::PARAM_STR);
$stmt->bindParam(':other', $_POST ['other'], PDO::PARAM_STR);
$stmt->execute();
header("Location:customer.php");
die ();
?>