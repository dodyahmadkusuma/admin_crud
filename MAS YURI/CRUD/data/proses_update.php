<<<<<<< HEAD
<?php

include('database.php');

$id = $_POST['id'];
$nama = mysql_escape_string($_POST['nama']);
$posisi = $_POST['id_posisi'];
$telp = $_POST['telp'];
$kota = $_POST['kota_asal'];
$kelamin = $_POST['jenis_kelamin'];

$sql = "update pegawai set nama='{$nama}', id_posisi='{$posisi}', telp='{$telp}', kota_asal='{$kota}', jenis_kelamin='{$kelamin}' where id_pegawai = '{$id}'";



mysql_query($sql);

header("Location: index.php");

=======
<?php

include('database.php');

$id = $_POST['id'];
$nama = mysql_escape_string($_POST['nama']);
$posisi = $_POST['id_posisi'];
$telp = $_POST['telp'];
$kota = $_POST['kota_asal'];
$kelamin = $_POST['jenis_kelamin'];

$sql = "update pegawai set nama='{$nama}', id_posisi='{$posisi}', telp='{$telp}', kota_asal='{$kota}', jenis_kelamin='{$kelamin}' where id_pegawai = '{$id}'";



mysql_query($sql);

header("Location: index.php");

>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
?>