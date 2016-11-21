<html>
	<head>
		<title>FORM TAMBAH</title>
	</head>
	<body>
		<form action=" <?php echo site_url('Siswa\aksisimpan') ?> " method="POST">
			NAMA :<input type="text" name="nama">	
			NILAI :<input type="text" name="nilai">
			<input type="submit" value="SIMPAN">
		</form>
	</body>
</html>