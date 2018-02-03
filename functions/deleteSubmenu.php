<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 03-Feb-18
 * Time: 10:54 AM
 */
require_once("../dbconfig.php");
try {
	$stmt = $conn->prepare("DELETE FROM submenu WHERE id =  :id");
	$stmt->bindParam(':id', $_GET ['q'], PDO::PARAM_INT);
	$stmt->execute();
	header("Location:../submenu.php");
} catch (PDOException $e) {
	echo "You can not delete this submenu because it is parent of some subtasks.<br>You will be redirected in 3 seconds.";
	header("refresh:3;url=../submenu.php");
}
?>