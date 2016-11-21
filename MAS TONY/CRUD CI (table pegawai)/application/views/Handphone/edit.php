<form action="<?=base_url('handphone/actSaveUpdate')?>" method="GET">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=$handphone->nama?>">
		<label>JUMLAH</label>
		<input type="text" name="jml" value="<?=$handphone->jml?>">
		<input type="hidden" name="id_handphone" value="<?=$handphone->id_handphone?>">

		<input class="btn btn-default" type="submit" name="" value="Simpan">
	</form>