<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 02-Feb-18
 * Time: 11:58 PM
 */
session_start();
require_once("../dbconfig.php");
$stmt = $conn->prepare("UPDATE subtask SET subtaskName=:subtaskName, price=:price, duration=:duration, 
submenuId=:submenuId WHERE id=:id");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->bindParam(':subtaskName', $_POST ['subtaskName'], PDO::PARAM_INT);
$stmt->bindParam(':price', $_POST ['price'], PDO::PARAM_INT);
$stmt->bindParam(':duration', $_POST ['duration'], PDO::PARAM_INT);
$stmt->bindParam(':submenuId', $_POST ['submenuId'], PDO::PARAM_INT);
$stmt->execute();
header("Location:../subtask.php");
die ();
?>