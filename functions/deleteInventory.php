<?php
require_once("../dbconfig.php");
$stmt = $conn->prepare("DELETE FROM inventory WHERE id =  :id");
$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
$stmt->execute();
header("Location:../inventory.php");
?>