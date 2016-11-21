<<<<<<< HEAD
<?php //session_start();

 //if(isset($_SESSION['userdata'])): ?>

<?php include_once'database.php' ?>
	<?php 
	$query = "SELECT pegawai.id_pegawai as id, pegawai.nama as nama, posisi.nama as posisi from pegawai,posisi where pegawai.id_posisi = posisi.id_posisi ";


 if($_GET['a']){
	$search = $_GET['a'];
	$query.= " and (pegawai.nama like '%{$search}%' or posisi.nama like '%{$search}%')"; 
} 

	$hasil=mysql_query($query);

	  ?>
<!DOCTYPE html>
<html>
<?php include_once'asset/head.php' ?>
<style>
	td{font-size: medium;}
</style>
<div class="row">
	<div class="container">
		
	<table class="table table-hover info">
	 <thead>
	 	<tr class="info">
	 		<th>Nama</th>
	 		<th>Posisi</th>
	 		<th>Edit</th>
	 		<th>Aksi</th>
	 		<th>Detail</th>
	 		<?php 
	 			if (mysql_num_rows($hasil) > 0){

	 				while ($row = mysql_fetch_array($hasil)) {
	 					echo "<tr><td>". $row['nama']."</td>";
	 					echo "<td>". $row['posisi']."</td>";
	 		 ?>

	 		 <td><button class="btn btn-warning"><a href="update.php?id=<?php echo $row['id'] ?>"style="color: black; font-size: medium;">Edit Data</a></button></td>
	 		 <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id'] ?>"style="color: black; font-size: medium;">Hapus Data</a></button></td>
	 		 <td><button class="btn btn-primary"><a href="detail.php?id=<?php echo $row['id'] ?>"style="color: black; font-size: medium;">Detail Data </a></button></td>
	 			<?php 
	 				}
	 			}

	 			 ?>
	 		
		</tr>
	 	</tr>
	</table>

	<button class="btn btn-default">
<a href="tambah.php">TAMBAH DATA</a>
	</button>
	<button class="btn btn-default">
<a href="../logout.php">SIGN OUT</a>
	</button>

	</div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<?php //else: ?>
<h1>maaf</h1> <a href="../index.html">Kembali</a>
<?php //endif;?>
=======
<?php //session_start();

 //if(isset($_SESSION['userdata'])): ?>

<?php include_once'database.php' ?>
	<?php 
	$query = "SELECT pegawai.id_pegawai as id, pegawai.nama as nama, posisi.nama as posisi from pegawai,posisi where pegawai.id_posisi = posisi.id_posisi ";


 if($_GET['a']){
	$search = $_GET['a'];
	$query.= " and (pegawai.nama like '%{$search}%' or posisi.nama like '%{$search}%')"; 
} 

	$hasil=mysql_query($query);

	  ?>
<!DOCTYPE html>
<html>
<?php include_once'asset/head.php' ?>
<style>
	td{font-size: medium;}
</style>
<div class="row">
	<div class="container">
		
	<table class="table table-hover info">
	 <thead>
	 	<tr class="info">
	 		<th>Nama</th>
	 		<th>Posisi</th>
	 		<th>Edit</th>
	 		<th>Aksi</th>
	 		<th>Detail</th>
	 		<?php 
	 			if (mysql_num_rows($hasil) > 0){

	 				while ($row = mysql_fetch_array($hasil)) {
	 					echo "<tr><td>". $row['nama']."</td>";
	 					echo "<td>". $row['posisi']."</td>";
	 		 ?>

	 		 <td><button class="btn btn-warning"><a href="update.php?id=<?php echo $row['id'] ?>"style="color: black; font-size: medium;">Edit Data</a></button></td>
	 		 <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id'] ?>"style="color: black; font-size: medium;">Hapus Data</a></button></td>
	 		 <td><button class="btn btn-primary"><a href="detail.php?id=<?php echo $row['id'] ?>"style="color: black; font-size: medium;">Detail Data </a></button></td>
	 			<?php 
	 				}
	 			}

	 			 ?>
	 		
		</tr>
	 	</tr>
	</table>

	<button class="btn btn-default">
<a href="tambah.php">TAMBAH DATA</a>
	</button>
	<button class="btn btn-default">
<a href="../logout.php">SIGN OUT</a>
	</button>

	</div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<?php //else: ?>
<h1>maaf</h1> <a href="../index.html">Kembali</a>
<?php //endif;?>
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
</html>