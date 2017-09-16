<?php
/*** connect to database ***/
/**
 * * mysql hostname **
 */
$hostname = 'localhost';
/**
 * * mysql username **
 */
$username = 'root';
/**
 * * mysql password **
 */
$password = '';
/**
 * * database name **
 */
$dbname = 'jetski';
$dbh = new PDO ('mysql:host=localhost;dbname=jetski;', $username, $password, array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
));
?>