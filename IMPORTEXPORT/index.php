<?php

error_reporting(E_ALL);
set_time_limit(0);

date_default_timezone_set('Asia/Jakarta');


include 'phpexcel/Classes/PHPExcel/IOFactory.php';
$inputFileName = 'laporan.xls';
$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
echo "<pre>";
print_r ($sheetData);
echo "</pre>";






?>
