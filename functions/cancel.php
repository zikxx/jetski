<?php
session_start();
require_once("../dbconfig.php");
$stmt = $conn->prepare("UPDATE activities SET status= 'Canceled', refund = paidPrice WHERE id=:id AND paid = 1");
$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
$stmt->execute();
header("Location:../index.php");
die ();
?>