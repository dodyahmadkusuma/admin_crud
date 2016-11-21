<<<<<<< HEAD
<?php 

include'database.php';


$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$kel= $_POST['kelamin'];
$telp= $_POST['telp'];
$alm= $_POST['alamat'];

$id =md5(date('ymdhms').rand());

$sql="INSERT INTO pegawai(id_pegawai,nama,id_posisi,jenis_kelamin,telp,kota_asal) values('$id','$nama','$posisi','$kel','$telp','$alm')";
mysql_query($sql);

header("Location: index.php");
=======
<?php 

include'database.php';


$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$kel= $_POST['kelamin'];
$telp= $_POST['telp'];
$alm= $_POST['alamat'];

$id =md5(date('ymdhms').rand());

$sql="INSERT INTO pegawai(id_pegawai,nama,id_posisi,jenis_kelamin,telp,kota_asal) values('$id','$nama','$posisi','$kel','$telp','$alm')";
mysql_query($sql);

header("Location: index.php");
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
 ?>