<form action="<?=base_url('pegawai/actSaveUpdate')?>" method="GET">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=$pegawai->nama?>">
		<label>TELP</label>
		<input type="text" name="telp" value="<?=$pegawai->telp?>">
		<input type="hidden" name="id_pegawai" value="<?=$pegawai->id_pegawai?>">

		<input class="btn btn-default" type="submit" name="" value="Simpan">
	</form>