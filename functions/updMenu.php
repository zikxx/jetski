<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 02-Feb-18
 * Time: 11:47 PM
 */
session_start();
require_once("../dbconfig.php");
$stmt = $conn->prepare("UPDATE menu SET menuName=:name WHERE id=:id");
$stmt->bindParam(':id', $_POST ['id'], PDO::PARAM_INT);
$stmt->bindParam(':name', $_POST ['name'], PDO::PARAM_INT);
$stmt->execute();
header("Location:../menu.php");
die ();
?>