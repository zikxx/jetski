<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 03-Feb-18
 * Time: 12:00 AM
 */
require_once("../dbconfig.php");
try {
	$stmt = $conn->prepare("DELETE FROM menu WHERE id =  :id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	header("Location:../menu.php");
} catch (PDOException $e) {
	echo "You can not delete this menu because it is parent of some submenus.<br>You will be redirected in 3 seconds.";
	header("refresh:3;url=../menu.php");
}
?>