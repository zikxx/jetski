<?php
session_start();
require_once("dbconfig.php");
$comment = filter_var($_POST ['comment'], FILTER_SANITIZE_STRING);
$price = filter_var($_POST ['price'], FILTER_SANITIZE_STRING);
$shop = filter_var($_POST ['shop'], FILTER_SANITIZE_STRING);
$date = date("Y-m-d H:i:s");
try {
	/**
	 * * echo a message saying we have connected **
	 */
	echo 'Connected to database';
	/**
	 * * INSERT data **
	 */
	$stmt = $conn->prepare("INSERT INTO shop(comment, price, date, shop_other)
	VALUES (:comment, :price, :date, :shop_other)");
	$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
	$stmt->bindParam(':price', $price, PDO::PARAM_STR);
	$stmt->bindParam(':shop_other', $shop, PDO::PARAM_STR);
	$stmt->bindParam(':date', $date, PDO::PARAM_STR);
	$stmt->execute();
	$id = $stmt->fetchAll();
	$id1 = count($id);
	/**
	 * * close the database connection **
	 */
	$conn = null;
} catch (PDOException $e) {
}
header("Location:index.php");
die ();
?>