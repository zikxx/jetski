<?php
session_start();
require_once("dbconfig.php");
$stmt = $dbh->prepare("UPDATE drivers_shippers SET name=:name, phone=:phone, other=:other WHERE id=:id");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->bindParam(':name', $_POST ['name'], PDO::PARAM_INT);
$stmt->bindParam(':phone', $_POST ['phone'], PDO::PARAM_STR);
$stmt->bindParam(':other', $_POST ['other'], PDO::PARAM_STR);
$stmt->execute();
header("Location:driver.php");
die ();
?>