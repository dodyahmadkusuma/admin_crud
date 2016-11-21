<?php  

$nama = $_POST['nama'];


$sql="INSERT INTO pegawai(nama) values('$nama')";
mysql_query($sql);


 ?>


 <a href="<?php echo base_url('pegawai') ?>">KEMBALI</a>