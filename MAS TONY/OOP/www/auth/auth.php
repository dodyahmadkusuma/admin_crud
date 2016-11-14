<?php 
include_once '../php/database.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql="select * from login where username = '{$user}'";
$query = mysql_query($sql);
if (mysql_num_rows($query) == 1) {
	$dataLoginDB = mysql_fetch_array($query);
	if ($pass == $dataLoginDB['password']) {
		$_SESSION['userdata'] = $dataLoginDB;
		header('Location: ../'); 
	}else {
		header('Location: login.php');
	}
}else {
	header('Location: login.php');
}


 ?>