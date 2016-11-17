<form action="<?=base_url('product/actSaveUpdate')?>" method="GET">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=$product->nama?>">
		<label>TELP</label>
		<input type="text" name="Jml" value="<?=$product->Jml?>">
		<input type="hidden" name="id_product" value="<?=$product->id_product?>">

		<input class="btn btn-default" type="submit" name="" value="Simpan">
	</form>