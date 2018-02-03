<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 03-Feb-18
 * Time: 10:55 AM
 */
require_once("../dbconfig.php");
$stmt = $conn->prepare("DELETE FROM subtask WHERE id =  :id");
$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
$stmt->execute();
header("Location:../subtask.php");
?>