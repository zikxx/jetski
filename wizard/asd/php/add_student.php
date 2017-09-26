<?php
require('config.php');
$data = json_decode(file_get_contents("php://input"));
$name = mysqli_real_escape_string($con, $data->name);
$submenu = mysqli_real_escape_string($con, $data->submenu);
$subtask = mysqli_real_escape_string($con, $data->subtask);
$inflatables = mysqli_real_escape_string($con, $data->inflatables);
$payment = mysqli_real_escape_string($con, $data->payment);
$price = mysqli_real_escape_string($con, $data->price);
$paid_price = mysqli_real_escape_string($con, $data->paid_price);
$paid = mysqli_real_escape_string($con, $data->paid);
$start = mysqli_real_escape_string($con, $data->start);
$end = mysqli_real_escape_string($con, $data->end);
$driver = mysqli_real_escape_string($con, $data->driver);
$type = mysqli_real_escape_string($con, $data->type);
$first_name = mysqli_real_escape_string($con, $data->first_name);
$last_name = mysqli_real_escape_string($con, $data->last_name);
$status = mysqli_real_escape_string($con, $data->status);
$refund = mysqli_real_escape_string($con, $data->refund);
$comment = mysqli_real_escape_string($con, $data->comment);
$query = mysqli_query($con, "insert into activities (name, submenu, subtask, inflatables, payment, price,
paid_price, paid, start, end, driver, type, first_name, last_name, status, refund, comment) 
values ('$name', '$submenu', '$subtask', '$inflatables', '$payment', '$price', '$paid_price', '$paid', '$start', '$end',
'$driver', '$type', '$first_name', '$last_name', 'Active', '$refund', '$comment')")
or die ('Unable to execute query. ' . mysqli_error($con));
