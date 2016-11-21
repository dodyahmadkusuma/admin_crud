<<<<<<< HEAD
<?php include'database.php' ?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">
<div class="row">
	<div class="container">
<h1>EDIT Data Pegawai</h1>

<?php 
	$sql_posisi = "SELECT * FROM posisi";
	$result_posisi = mysql_query($sql_posisi);
	$sql_alm="SELECT * FROM kota";
	$result_alm = mysql_query($sql_alm);

$id= $_GET['id'];
$sql="SELECT 
			pg.id_pegawai as pegawai_id,
			pg.nama as nama_pegawai,
			pg.telp as telp,
			ko.nama_kota as alamat,
			kl.nama as jenis_kelamin,
			po.nama as posisi,
			po.id_posisi as posisi_id,
			ko.id_kota as kota_id,
			kl.id_kelamin as kelamin_id
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

$result_pegawai = mysql_query($sql);
$data_pegawai = mysql_fetch_array($result_pegawai);



 ?>

<table class="table table-hover info" >
<thead >
<form class="form-inline" action="proses_update.php" method="POST">
<div class="form-group">
<input type="hidden" name="id" value=" <?php echo $data_pegawai['pegawai_id'] ?> "> 
<tr>
<th>NAMA</th>
<th>POSISI</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th>
<th>NO. TELP</th>

<tr>
<td><input type="text" name="nama" value="<?php echo $data_pegawai['nama_pegawai'] ?>"> </td>
</div>
<td><select name="posisi" >
	<?php while($data_posisi = mysql_fetch_array($result_posisi)) {?>
	<option value="<?php echo $data_posisi['id_posisi']; ?>" <?php if($data_pegawai['posisi_id'] == $data_posisi['id_posisi']) echo "selected" ?>>
		<?php echo $data_posisi['nama']; ?>
	</option>
<?php } ?>
</select></td>
<td><br>
<input type="radio" name="kelamin" value="1" <?php if (1 == $data_pegawai['kelamin_id']) echo 'checked=""';?> >Male
<input type="radio" name="kelamin" value="2" <?php if (2 == $data_pegawai['kelamin_id']) echo 'checked=""';?>>Female
<input type="radio" name="kelamin" value="3" <?php if (3 == $data_pegawai['kelamin_id']) echo 'checked=""';?>>Shemale
</td>
<td>
<select name="alamat">
	<?php while($data_alamat = mysql_fetch_array($result_alm)) {?>
	<option value="<?php echo $data_alamat['id_kota']; ?>"<?php if ($data_pegawai['kota_id'] == $data_alamat['id_kota']) echo "selected" ?>>
		<?php echo $data_alamat['nama_kota']; ?>
	</option>
<?php } ?>
</select>
</td>
<td>
<input type="text" name="telp" value="<?php echo  $data_pegawai['telp']?>">
</td>
</tr></tr>

</table>
		<input class="btn btn-default" type="submit" value="Edit">		
</form>



<br>
<br>
<br>
<button class="btn btn-default"><a href="index.php">KEMBALI</a></button>

</div>
	</div>
 <script src="js/jquery-3.1.1.min.js"></script>
=======
<?php include'database.php' ?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">
<div class="row">
	<div class="container">
<h1>EDIT Data Pegawai</h1>

<?php 
	$sql_posisi = "SELECT * FROM posisi";
	$result_posisi = mysql_query($sql_posisi);
	$sql_alm="SELECT * FROM kota";
	$result_alm = mysql_query($sql_alm);

$id= $_GET['id'];
$sql="SELECT 
			pg.id_pegawai as pegawai_id,
			pg.nama as nama_pegawai,
			pg.telp as telp,
			ko.nama_kota as alamat,
			kl.nama as jenis_kelamin,
			po.nama as posisi,
			po.id_posisi as posisi_id,
			ko.id_kota as kota_id,
			kl.id_kelamin as kelamin_id
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

$result_pegawai = mysql_query($sql);
$data_pegawai = mysql_fetch_array($result_pegawai);



 ?>

<table class="table table-hover info" >
<thead >
<form class="form-inline" action="proses_update.php" method="POST">
<div class="form-group">
<input type="hidden" name="id" value=" <?php echo $data_pegawai['pegawai_id'] ?> "> 
<tr>
<th>NAMA</th>
<th>POSISI</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th>
<th>NO. TELP</th>

<tr>
<td><input type="text" name="nama" value="<?php echo $data_pegawai['nama_pegawai'] ?>"> </td>
</div>
<td><select name="posisi" >
	<?php while($data_posisi = mysql_fetch_array($result_posisi)) {?>
	<option value="<?php echo $data_posisi['id_posisi']; ?>" <?php if($data_pegawai['posisi_id'] == $data_posisi['id_posisi']) echo "selected" ?>>
		<?php echo $data_posisi['nama']; ?>
	</option>
<?php } ?>
</select></td>
<td><br>
<input type="radio" name="kelamin" value="1" <?php if (1 == $data_pegawai['kelamin_id']) echo 'checked=""';?> >Male
<input type="radio" name="kelamin" value="2" <?php if (2 == $data_pegawai['kelamin_id']) echo 'checked=""';?>>Female
<input type="radio" name="kelamin" value="3" <?php if (3 == $data_pegawai['kelamin_id']) echo 'checked=""';?>>Shemale
</td>
<td>
<select name="alamat">
	<?php while($data_alamat = mysql_fetch_array($result_alm)) {?>
	<option value="<?php echo $data_alamat['id_kota']; ?>"<?php if ($data_pegawai['kota_id'] == $data_alamat['id_kota']) echo "selected" ?>>
		<?php echo $data_alamat['nama_kota']; ?>
	</option>
<?php } ?>
</select>
</td>
<td>
<input type="text" name="telp" value="<?php echo  $data_pegawai['telp']?>">
</td>
</tr></tr>

</table>
		<input class="btn btn-default" type="submit" value="Edit">		
</form>



<br>
<br>
<br>
<button class="btn btn-default"><a href="index.php">KEMBALI</a></button>

</div>
	</div>
 <script src="js/jquery-3.1.1.min.js"></script>
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
<script src="js/bootstrap.min.js"></script>