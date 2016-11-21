        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <h1 class="page-header"><?php echo $judul; ?></h1>
<?= $this->session->flashdata('alert_msg'); ?>
<form class="form-horizontal" method="POST" action="<?=base_url('siswa/act_Tambah/') ?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama" >
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Alamat" name="alamat">
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
      <select class="form-control"  name="id_kelas">
        <option value="">--- Pilih Kelas ---</option>
        <?php foreach ($kelas as $key => $value) {?>
        <option value="<?=$value->id_kelas ?>">
       <?=$value->nama_kelas ?>   

        </option>
        <?php } ?>
      </select>
    </div>
  </div>
    
    

  <div class="form-group" style="padding-top: 25px;">
    <div class="col-sm-offset-2 col-sm-10">
    <a href="<?= base_url('siswa') ?>" class="btn btn-default" >Kembali</a>
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </div>
</form>
</div>