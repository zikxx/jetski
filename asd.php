<?php
require("head.php");
/**
 * Error reporting
 */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
date_default_timezone_set('Europe/London');
/**
 * Include PHPExcel
 */
require_once dirname(__FILE__) . '/phpexcel/Classes/PHPExcel.php';
// Create new PHPExcel object
echo date('H:i:s') . ' Create new PHPExcel object' . EOL;
$objPHPExcel = new PHPExcel ();
// Set document properties
echo date('H:i:s') . ' Set document properties' . EOL;
$objPHPExcel->getProperties()->setCreator('Maarten Balliauw')->setLastModifiedBy('Maarten Balliauw')->setTitle('PHPExcel Test Document')->setSubject('PHPExcel Test Document')->setDescription('Test document for PHPExcel, generated using PHP classes.')->setKeywords('office PHPExcel php')->setCategory('Test result file');
// Create the worksheet
echo date('H:i:s') . ' Add data' . EOL;
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Centurion')->setCellValue('A2', 'Start Time')->setCellValue('B2', 'Finish Time')->setCellValue('C2', 'Surname')->setCellValue('D2', 'Name')->setCellValue('E2', 'Instructor')->setCellValue('F2', 'Payment')->setCellValue('G2', 'Activity')->setCellValue('H2', 'Type')->setCellValue('I2', 'Equipment')->setCellValue('J2', 'Gender')->setCellValue('K2', 'Age')->setCellValue('L2', 'Weight')->setCellValue('M2', 'Shoe Size');
$sql = ("SELECT start, end, last_name, f_name, driver, payment, name, submenu, equipment, gender, age, weight, shoe_size 
FROM activities where subtask like 'Wakeboard - Centurion%' and start like '" . date("Y-m-d") . "%'");
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A3');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A50', 'Mastercraft')->setCellValue('A51', 'Start Time')->setCellValue('B51', 'Finish Time')->setCellValue('C51', 'Surname')->setCellValue('D51', 'Name')->setCellValue('E51', 'Instructor')->setCellValue('F51', 'Payment')->setCellValue('G51', 'Activity')->setCellValue('H51', 'Type')->setCellValue('I51', 'Equipment')->setCellValue('J51', 'Gender')->setCellValue('K51', 'Age')->setCellValue('L51', 'Weight')->setCellValue('M51', 'Shoe Size');
$sql = ("SELECT start, end, last_name, f_name, driver, payment, name, submenu, equipment, gender, age, weight, shoe_size 
FROM activities where subtask like 'Wakeboard - Mastercraft%' and start like '" . date("Y-m-d") . "%'");
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A52');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A100', 'Othelo 150HP')->setCellValue('A101', 'Start Time')->setCellValue('B101', 'Finish Time')->setCellValue('C101', 'Surname')->setCellValue('D101', 'Name')->setCellValue('E101', 'Instructor')->setCellValue('F101', 'Payment')->setCellValue('G101', 'Activity')->setCellValue('H101', 'Type')->setCellValue('I101', 'Equipment')->setCellValue('J101', 'Gender')->setCellValue('K101', 'Age')->setCellValue('L101', 'Weight')->setCellValue('M101', 'Shoe Size');
$sql = ("SELECT start, end, last_name, f_name, driver, payment, name, submenu, equipment, gender, age, weight, shoe_size 
FROM activities where subtask like 'Wakeboard - Othello 150HP%' and start like '" . date("Y-m-d") . "%'");
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A102');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A150', 'Othelo 200HP')->setCellValue('A151', 'Start Time')->setCellValue('B151', 'Finish Time')->setCellValue('C151', 'Surname')->setCellValue('D151', 'Name')->setCellValue('E151', 'Instructor')->setCellValue('F151', 'Payment')->setCellValue('G151', 'Activity')->setCellValue('H151', 'Type')->setCellValue('I151', 'Equipment')->setCellValue('J151', 'Gender')->setCellValue('K151', 'Age')->setCellValue('L151', 'Weight')->setCellValue('M151', 'Shoe Size');
$sql = ("SELECT start, end, last_name, f_name, driver, payment, name, submenu, equipment, gender, age, weight, shoe_size 
FROM activities where subtask like 'Wakeboard - Othello 200HP%' and start like '" . date("Y-m-d") . "%'");
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A152');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A200', 'Windsurfing')->setCellValue('A201', 'Start Time')->setCellValue('B201', 'Finish Time')->setCellValue('C201', 'Surname')->setCellValue('D201', 'Name')->setCellValue('E201', 'Instructor')->setCellValue('F201', 'Payment')->setCellValue('G201', 'Activity')->setCellValue('H201', 'Type')->setCellValue('I201', 'Equipment')->setCellValue('J201', 'Gender')->setCellValue('K201', 'Age')->setCellValue('L201', 'Weight')->setCellValue('M201', 'Shoe Size');
$sql = ("SELECT start, end, last_name, f_name, driver, payment, name, submenu, equipment, gender, age, weight, shoe_size 
FROM activities where subtask like 'Windsurfing' and start like '" . date("Y-m-d") . "%'");
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A250');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A250', 'Other')->setCellValue('A251', 'Start Time')->setCellValue('B251', 'Finish Time')->setCellValue('C251', 'Surname')->setCellValue('D251', 'Name')->setCellValue('E251', 'Instructor')->setCellValue('F251', 'Payment')->setCellValue('G251', 'Activity')->setCellValue('H251', 'Type')->setCellValue('I251', 'Equipment')->setCellValue('J251', 'Gender')->setCellValue('K251', 'Age')->setCellValue('L251', 'Weight')->setCellValue('M251', 'Shoe Size');
$sql = ("SELECT start, end, last_name, f_name, driver, payment, name, submenu, equipment, gender, age, weight, shoe_size 
FROM activities where subtask NOT like 'Wakeboard - Centurion%' and subtask NOT like 'Wakeboard - Mastercraft%'
	and subtask NOT like 'Wakeboard - Othelo%' and not name='Windsurfing' and start like '" . date("Y-m-d") . "%'");
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A252');
// Set title row bold
echo date('H:i:s') . ' Set title row bold' . EOL;
$objPHPExcel->getActiveSheet()->getStyle('A1:J1')->getFont()->setBold(true);
// Set autofilter
echo date('H:i:s') . ' Set autofilter' . EOL;
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
// Save Excel 2007 file
echo date('H:i:s'), " Write to Excel2007 format", EOL;
$callStartTime = microtime(true);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;
echo date('H:i:s'), " File written to ", str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)), EOL;
echo 'Call time to write Workbook was ', sprintf('%.4f', $callTime), " seconds", EOL;
// Echo memory usage
echo date('H:i:s'), ' Current memory usage: ', (memory_get_usage(true) / 1024 / 1024), " MB", EOL;
// Save Excel 95 file
echo date('H:i:s'), " Write to Excel5 format", EOL;
$callStartTime = microtime(true);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;
echo date('H:i:s'), " File written to ", str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)), EOL;
echo 'Call time to write Workbook was ', sprintf('%.4f', $callTime), " seconds", EOL;
// Echo memory usage
echo date('H:i:s'), ' Current memory usage: ', (memory_get_usage(true) / 1024 / 1024), " MB", EOL;
// Echo memory peak usage
echo date('H:i:s') . ' Peak memory usage: ' . (memory_get_peak_usage(true) / 1024 / 1024) . ' MB' . EOL;
// Echo done
echo date('H:i:s') . ' Done writing files' . EOL;
echo 'Files have been created in ', getcwd(), EOL;
