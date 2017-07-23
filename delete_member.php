<?php
require_once ("dbconfig.php");
$stmt = $dbh->prepare ( "DELETE FROM members WHERE id =  :id" );
$stmt->bindParam ( ':id', $_GET ['q'], PDO::PARAM_INT );
$stmt->execute ();
header ( "Location:member.php" );
?>