<<<<<<< HEAD
<?php 	
include_once'database.php';

$id = $_GET['id'];
$nama = $_GET['nama'];

$sql = "delete from pegawai where id_pegawai = '{$id}'";


mysql_query($sql);

// header('location:index.php');

echo "sukses melakukan delete".$nama ."<br>";

echo"<button><a href='index.php'>back</a></button>";

 ?>
=======
<?php 	
include_once'database.php';

$id = $_GET['id'];
$nama = $_GET['nama'];

$sql = "delete from pegawai where id_pegawai = '{$id}'";


mysql_query($sql);

// header('location:index.php');

echo "sukses melakukan delete".$nama ."<br>";

echo"<button><a href='index.php'>back</a></button>";

 ?>
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
