<<<<<<< HEAD
<?php 
include_once('database.php');
$id= $_GET['id'];
$sql="SELECT 
			pg.nama as nama_pegawai,
			pg.telp,
			ko.nama_kota as alamat,
			kl.nama as jenis_kelamin,
			po.nama as posisi 
		FROM 
			pegawai pg,
			kelamin kl,
			posisi po,
			kota ko
		WHERE 
			pg.id_pegawai ='{$id}' and 
			pg.jenis_kelamin = kl.id_kelamin and 
			pg.id_posisi= po.id_posisi and 
			pg.kota_asal = ko.id_kota

		";

$result = mysql_query($sql);
$data = mysql_fetch_array($result);

 ?>
 <html>
 <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="js/bootstrap.min.js">
		<div class="row"><div class="container"><h1>DATA PEGAWAI</h1></div></div>
 	<style>
 	td
 	{font-size:x-large;}
 	</style>
<table class="table table-hover info">
<thead>
<tr>
 <th>Nama</th>
 
 <th> No Telp</th>
 
 <th>Alamat</th>
 
 <th>Jenis Kelamin</th>
 <th>Posisi</th>
 <tr>
 <td><?php echo $data ['nama_pegawai'] ?></td>
 <td><?php echo $data ['telp'] ?></td>
 <td><?php echo $data ['alamat'] ?></td>
 <td><?php echo $data ['jenis_kelamin'] ?></td>
 <td><?php echo $data ['posisi'] ?></td>
</tr></tr>
</table>


 <script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
=======
<?php 
include_once('database.php');
$id= $_GET['id'];
$sql="SELECT 
			pg.nama as nama_pegawai,
			pg.telp,
			ko.nama_kota as alamat,
			kl.nama as jenis_kelamin,
			po.nama as posisi 
		FROM 
			pegawai pg,
			kelamin kl,
			posisi po,
			kota ko
		WHERE 
			pg.id_pegawai ='{$id}' and 
			pg.jenis_kelamin = kl.id_kelamin and 
			pg.id_posisi= po.id_posisi and 
			pg.kota_asal = ko.id_kota

		";

$result = mysql_query($sql);
$data = mysql_fetch_array($result);

 ?>
 <html>
 <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="js/bootstrap.min.js">
		<div class="row"><div class="container"><h1>DATA PEGAWAI</h1></div></div>
 	<style>
 	td
 	{font-size:x-large;}
 	</style>
<table class="table table-hover info">
<thead>
<tr>
 <th>Nama</th>
 
 <th> No Telp</th>
 
 <th>Alamat</th>
 
 <th>Jenis Kelamin</th>
 <th>Posisi</th>
 <tr>
 <td><?php echo $data ['nama_pegawai'] ?></td>
 <td><?php echo $data ['telp'] ?></td>
 <td><?php echo $data ['alamat'] ?></td>
 <td><?php echo $data ['jenis_kelamin'] ?></td>
 <td><?php echo $data ['posisi'] ?></td>
</tr></tr>
</table>


 <script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
 </html>