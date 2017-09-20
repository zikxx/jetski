<?php
session_start();
require_once("dbconfig.php");
$stmt = $dbh->prepare("UPDATE activities SET status='Canceled', refund = paid_price WHERE id=:id and paid = 'Yes'");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->execute();
header("Location:index.php");
die ();
?>