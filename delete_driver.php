<?php
require_once("dbconfig.php");
$stmt = $dbh->prepare("DELETE FROM drivers_shippers WHERE id =  :id");
$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
$stmt->execute();
header("Location:driver.php");
?>