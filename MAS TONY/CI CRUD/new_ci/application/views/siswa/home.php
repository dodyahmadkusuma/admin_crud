        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php echo $this->session->flashdata('alert_msg'); ?>
              <h1 class="page-header"><?php echo $judul; ?></h1>

          

<?php $this->session->flashdata('alert_msg'); ?>
        
  <div class="table-responsive">
    <table class="table table-hover">
    <a href="<?= base_url('siswa/add_siswa/') ?>" class="btn btn-success">Tambah Siswa</a>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kelas</th>
          <th colspan="2"><center>Aksi</center></th>
        </tr>
      </thead>
      <tbody>
    <?php foreach ($data_siswa as $key => $value){ ?>
        <tr>
          <td><?= $value->id_siswa ?></td>
          <td><?= $value->nama ?></td>
          <td><?= $value->alamat ?></td>
          <td><?= $value->nama_kelas ?></td>
          <td style="text-align: right;"><a class="btn btn-info" href="<?= base_url('/siswa/editSiswa/') . $value->id_siswa?>">Edit</a></td>
          <td style="text-align: left;">
          <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini');" class="btn btn-danger" href="<?= base_url('/siswa/hapusSiswa/') . $value->id_siswa?>">Hapus</a></td>
        </tr>
       <?php } ?>
      </tbody>
    </table>
  </div>