<?php
session_start ();
require_once ("dbconfig.php");
$stmt = $dbh->prepare ( "UPDATE inventory SET type=:type, registration=:registration, other=:other WHERE id=:id" );

$stmt->bindParam ( ':id', $_POST ['id'], PDO::PARAM_INT );
$stmt->bindParam ( ':type', $_POST ['type'], PDO::PARAM_INT );
$stmt->bindParam ( ':registration', $_POST ['registration'], PDO::PARAM_STR );
$stmt->bindParam ( ':other', $_POST ['other'], PDO::PARAM_STR );
$stmt->execute ();
header ( "Location:inventory.php" );
die ();
?>