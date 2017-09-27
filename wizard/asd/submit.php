<?php
/**
 * Created by PhpStorm.
 * User: Zires
 * Date: 19-Sep-17
 * Time: 11:22 PM
 */
$postdata = file_get_contents("php://index.php");
$request = json_decode($postdata);
$email = $request->email;
$pass = $request->password;
?>