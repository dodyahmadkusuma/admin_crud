    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              <h1 class="page-header"><?php echo $judul; ?></h1>
<form class="form-horizontal" method="POST" action="<?=base_url('siswa/act_edit/') ?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama"  value="<?= $siswa->nama ?>" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat" name="alamat" value="<?= $siswa->alamat ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_kelas">
        <option>--Pilih Kelas--</option>
        <?php foreach ($kelas as $key => $value) {?>
        <?php if ($value->id_kelas == $siswa->id_kelas) {
          $selected = 'selected';
        }else{
          $selected="";
          } ?>
        <option value="<?=$value->id_kelas?>"  <?=$selected ?>>
       <?=$value->nama_kelas ?>   

        </option>
        <?php } ?>
      </select>
    </div>
  <div class="form-group" style="padding-top: 25px;">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="hidden" name="id" value="<?=$siswa->id_siswa ?>" readonly>
    <a href="<?= base_url('siswa') ?>" class="btn btn-default" >Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
</div>