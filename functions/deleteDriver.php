<?php
require_once("../dbconfig.php");
$stmt = $conn->prepare("DELETE FROM driversShippers WHERE id =  :id");
$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
$stmt->execute();
header("Location:../driver.php");
?>