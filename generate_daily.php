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
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getStyle('A2:M2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A1:M2')->getFont()->setBold(true);
echo date('H:i:s'), "Bookings", EOL;
$objPHPExcel->getActiveSheet()->setTitle('Bookings');
// Create the worksheet
echo date('H:i:s') . ' Add data' . EOL;
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Centurion')->setCellValue('A2', 'Start Time')->setCellValue('B2', 'Finish Time')->setCellValue('C2', 'Surname')->setCellValue('D2', 'Name')->setCellValue('E2', 'Instructor')->setCellValue('F2', 'Payment')->setCellValue('G2', 'Activity')->setCellValue('H2', 'Type')->setCellValue('I2', 'Equipment')->setCellValue('J2', 'Gender')->setCellValue('K2', 'Age')->setCellValue('L2', 'Weight')->setCellValue('M2', 'Shoe Size');
$sql = ("SELECT a.start, a.end, m.last_name, m.first_name, a.driver, a.payment, a.name, a.submenu, m.storage_1, m.gender, m.age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name
where a.subtask like 'Wakeboard - Centurion%' and a.start like '" . date("Y-m-d") . "%'");
$query = $conn->prepare($sql);
$query->execute();
$results1 = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results1, NULL, 'A3');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A50', 'Mastercraft')->setCellValue('A51', 'Start Time')->setCellValue('B51', 'Finish Time')->setCellValue('C51', 'Surname')->setCellValue('D51', 'Name')->setCellValue('E51', 'Instructor')->setCellValue('F51', 'Payment')->setCellValue('G51', 'Activity')->setCellValue('H51', 'Type')->setCellValue('I51', 'Equipment')->setCellValue('J51', 'Gender')->setCellValue('K51', 'Age')->setCellValue('L51', 'Weight')->setCellValue('M51', 'Shoe Size');
$sql = ("SELECT a.start, a.end, m.last_name, m.first_name, a.driver, a.payment, a.name, a.submenu, m.storage_1, m.gender, m.age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name
where a.subtask like 'Wakeboard - Mastercraft%' and a.start like '" . date("Y-m-d") . "%'");
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A52');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A100', 'Othelo 150HP')->setCellValue('A101', 'Start Time')->setCellValue('B101', 'Finish Time')->setCellValue('C101', 'Surname')->setCellValue('D101', 'Name')->setCellValue('E101', 'Instructor')->setCellValue('F101', 'Payment')->setCellValue('G101', 'Activity')->setCellValue('H101', 'Type')->setCellValue('I101', 'Equipment')->setCellValue('J101', 'Gender')->setCellValue('K101', 'Age')->setCellValue('L101', 'Weight')->setCellValue('M101', 'Shoe Size');
$sql = ("SELECT a.start, a.end, m.last_name, m.first_name, a.driver, a.payment, a.name, a.submenu, m.storage_1, m.gender, m.age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name
where a.subtask like 'Wakeboard - Othello 150HP%' and a.start like '" . date("Y-m-d") . "%'");
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A102');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A150', 'Othelo 200HP')->setCellValue('A151', 'Start Time')->setCellValue('B151', 'Finish Time')->setCellValue('C151', 'Surname')->setCellValue('D151', 'Name')->setCellValue('E151', 'Instructor')->setCellValue('F151', 'Payment')->setCellValue('G151', 'Activity')->setCellValue('H151', 'Type')->setCellValue('I151', 'Equipment')->setCellValue('J151', 'Gender')->setCellValue('K151', 'Age')->setCellValue('L151', 'Weight')->setCellValue('M151', 'Shoe Size');
$sql = ("SELECT a.start, a.end, m.last_name, m.first_name, a.driver, a.payment, a.name, a.submenu, m.storage_1, m.gender, m.age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name
where a.subtask like 'Wakeboard - Othello 200HP%' and a.start like '" . date("Y-m-d") . "%'");
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A152');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A200', 'Windsurfing')->setCellValue('A201', 'Start Time')->setCellValue('B201', 'Finish Time')->setCellValue('C201', 'Surname')->setCellValue('D201', 'Name')->setCellValue('E201', 'Instructor')->setCellValue('F201', 'Payment')->setCellValue('G201', 'Activity')->setCellValue('H201', 'Type')->setCellValue('I201', 'Equipment')->setCellValue('J201', 'Gender')->setCellValue('K201', 'Age')->setCellValue('L201', 'Weight')->setCellValue('M201', 'Shoe Size');
$sql = ("SELECT a.start, a.end, m.last_name, m.first_name, a.driver, a.payment, a.name, a.submenu, m.storage_1, m.gender, m.age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name
where a.subtask like '%Windsurfing%' and a.start like '" . date("Y-m-d") . "%'");
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A202');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A250', 'Fishing boat')->setCellValue('A251', 'Start Time')->setCellValue('B251', 'Finish Time')->setCellValue('C251', 'Surname')->setCellValue('D251', 'Name')->setCellValue('E251', 'Instructor')->setCellValue('F251', 'Payment')->setCellValue('G251', 'Activity')->setCellValue('H251', 'Type')->setCellValue('I251', 'Equipment')->setCellValue('J251', 'Gender')->setCellValue('K251', 'Age')->setCellValue('L251', 'Weight')->setCellValue('M251', 'Shoe Size');
$sql = ("SELECT a.start, a.end, m.last_name, m.first_name, a.driver, a.payment, a.name, a.submenu, m.storage_1, m.gender, m.age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name
where a.name='Fishing boat'  and a.start like '" . date("Y-m-d") . "%'");
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A252');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A300', 'Yacht')->setCellValue('A301', 'Start Time')->setCellValue('B301', 'Finish Time')->setCellValue('C301', 'Surname')->setCellValue('D301', 'Name')->setCellValue('E301', 'Instructor')->setCellValue('F301', 'Payment')->setCellValue('G301', 'Activity')->setCellValue('H301', 'Type')->setCellValue('I301', 'Equipment')->setCellValue('J301', 'Gender')->setCellValue('K301', 'Age')->setCellValue('L301', 'Weight')->setCellValue('M301', 'Shoe Size');
$sql = ("SELECT a.start, a.end, m.last_name, m.first_name, a.driver, a.payment, a.name, a.submenu, m.storage_1, m.gender, m.age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name
where a.name='Yacht'  and a.start like '" . date("Y-m-d") . "%'");
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A302');
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A350', 'Other')->setCellValue('A351', 'Start Time')->setCellValue('B351', 'Finish Time')->setCellValue('C351', 'Surname')->setCellValue('D351', 'Name')->setCellValue('E351', 'Instructor')->setCellValue('F351', 'Payment')->setCellValue('G351', 'Activity')->setCellValue('H351', 'Type')->setCellValue('I351', 'Equipment')->setCellValue('J351', 'Gender')->setCellValue('K351', 'Age')->setCellValue('L351', 'Weight')->setCellValue('M351', 'Shoe Size');
$sql = ("SELECT a.start, a.end, m.last_name, m.first_name, a.driver, a.payment, a.name, a.submenu, m.storage_1, m.gender, m.age, m.weight, m.shoe_size
FROM activities a inner join members m on a.last_name = m.last_name
where a.subtask NOT like 'Wakeboard - Centurion%' and a.subtask NOT like 'Wakeboard - Mastercraft%'
	and a.subtask NOT like 'Wakeboard - Othelo%' and not a.name='Windsurfing'
	and not a.name='Yacht' and not a.name='Fishing boat' and a.start like '" . date("Y-m-d") . "%'");
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->getActiveSheet()->fromArray($results, NULL, 'A352');
// Set title row bold
echo date('H:i:s') . ' Set title row bold' . EOL;
$objPHPExcel->getActiveSheet()->getStyle('A1:M1')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A2:M2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A50:M50')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A51:M51')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A100:M100')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A101:M101')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A150:M150')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A151:M151')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A200:M200')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A201:M201')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A250:M250')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A251:M251')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A300:M300')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A301:M301')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A350:M350')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A351:M351')->getFont()->setBold(true);
// Set autofilter
echo date('H:i:s') . ' Set autofilter' . EOL;
// New worksheet
echo date('H:i:s'), " Clone worksheet", EOL;
$objPHPExcel->createSheet();
$sql = ("SELECT m.first_name, m.last_name, m.status, m.phone, m.emergency_contact, m.address, m.email, m.storage_1, m.storage_2, m.storage_3 from activities a
INNER JOIN members m on a.last_name = m.last_name
WHERE a.last_name <> '' and a.start like '" . date("Y-m-d") . "%' order by a.start");
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Members')->setCellValue('A2', 'Surname')->setCellValue('B2', 'Name')->setCellValue('C2', 'Family/Single')->setCellValue('D2', 'Phone')->setCellValue('E2', 'Emergency contact')->setCellValue('F2', 'Card No:')->setCellValue('G2', 'Address')->setCellValue('H2', 'Email')->setCellValue('I2', 'Storage equipment')->setCellValue('J2', 'Storage equipment')->setCellValue('K2', 'Storage equipment')->setCellValue('L2', 'Comments')->setCellValue()->fromArray($results, NULL, 'A3');
$objPHPExcel->getActiveSheet()->getStyle('A1:M1')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A2:M2')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
// Rename
$objPHPExcel->getActiveSheet()->setTitle('Members');
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
