<<<<<<< HEAD
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">
<?php include'database.php' ?>
<div class="row">
	<div class="container">

<h1>From Tambah Data Pegawai</h1>

<?php 
	$sql_posisi = "SELECT * FROM posisi";
	$result_posisi = mysql_query($sql_posisi);
	$sql_alm="SELECT * FROM kota";
	$result_alm = mysql_query($sql_alm);

 ?>
<table class="table table-hover info" >
<thead >
<tr>
<form class="form-inline" action="proses_tambah.php" method="POST">
<th>NAMA</th>	
<th>POSISI</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th> 
<th>NO. TELP</th>

<tr>

<td><input type="text" name="nama"></td>
<td>
<select name="posisi">
	<?php while($data_posisi = mysql_fetch_array($result_posisi)) {?>
	<option value="<?php echo $data_posisi['id_posisi']; ?>">
		<?php echo $data_posisi['nama']; ?>
	</option>
<?php } ?>
</select></td>
<td>
<input type="radio" name="kelamin" value="1">Male
<input type="radio" name="kelamin" value="2">Female
<input type="radio" name="kelamin" value="3">Shemale
</td>
<td>
<select name="alamat">
	<?php while($data_alamat = mysql_fetch_array($result_alm)) {?>
	<option value="<?php echo $data_alamat['id_kota']; ?>">
		<?php echo $data_alamat['nama_kota']; ?>
	</option>
<?php } ?>
</select>
</td>
<td>
<input type="text" name="telp">
</td>


</tr></tr></thead></table>
		<input class="btn btn-default" type="submit" value="Tambah Data">		
</form>


<br>
<br>
<br>
<button class="btn btn-default"><a href="index.php">KEMBALI</a></button>
</div></div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
=======
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">
<?php include'database.php' ?>
<div class="row">
	<div class="container">

<h1>From Tambah Data Pegawai</h1>

<?php 
	$sql_posisi = "SELECT * FROM posisi";
	$result_posisi = mysql_query($sql_posisi);
	$sql_alm="SELECT * FROM kota";
	$result_alm = mysql_query($sql_alm);

 ?>
<table class="table table-hover info" >
<thead >
<tr>
<form class="form-inline" action="proses_tambah.php" method="POST">
<th>NAMA</th>	
<th>POSISI</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th> 
<th>NO. TELP</th>

<tr>

<td><input type="text" name="nama"></td>
<td>
<select name="posisi">
	<?php while($data_posisi = mysql_fetch_array($result_posisi)) {?>
	<option value="<?php echo $data_posisi['id_posisi']; ?>">
		<?php echo $data_posisi['nama']; ?>
	</option>
<?php } ?>
</select></td>
<td>
<input type="radio" name="kelamin" value="1">Male
<input type="radio" name="kelamin" value="2">Female
<input type="radio" name="kelamin" value="3">Shemale
</td>
<td>
<select name="alamat">
	<?php while($data_alamat = mysql_fetch_array($result_alm)) {?>
	<option value="<?php echo $data_alamat['id_kota']; ?>">
		<?php echo $data_alamat['nama_kota']; ?>
	</option>
<?php } ?>
</select>
</td>
<td>
<input type="text" name="telp">
</td>


</tr></tr></thead></table>
		<input class="btn btn-default" type="submit" value="Tambah Data">		
</form>


<br>
<br>
<br>
<button class="btn btn-default"><a href="index.php">KEMBALI</a></button>
</div></div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
</html>