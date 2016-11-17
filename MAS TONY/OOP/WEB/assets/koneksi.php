<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'OOP';

$conn = mysql_connect($host,$username,$password);

mysql_select_db($db, $conn);

?>