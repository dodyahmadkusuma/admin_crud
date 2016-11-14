<div class="content-wrapper">


<form method="POST" action="<?= base_url('admin/act_tambah/')?>">
  <div class="form-group">
    <label>Judul Artikel</label>
    <input type="text" class="form-control" id="InputJudul" name="judul_content" placeholder="Enter Judul Content">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Input Gambar</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
  </div>
  <div class="form-group">
    <label>Isi Artikel</label>
    <textarea class="form-control" inputmode="text-area" type="text-area" name="isi_content" class="form-control" style="height: 250px;"></textarea>

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      


  </div>