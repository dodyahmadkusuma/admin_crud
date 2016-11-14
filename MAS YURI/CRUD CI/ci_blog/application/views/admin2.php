<div class="content-wrapper">
<style type="text/css">
th
{
  text-align:center;
}
p{
  text-align: justify;
  font-size: larger;
  padding-right: 100px;
}
.btn-default{
  font-size: larger;

}
  </style>
    <table class="table table-hover" id="TableSaya" >
<tr> 
      

        <th>
          Judul Post
        </th>
        <th>
          Tanggal Post
        </th>
        
       
      <?php foreach ($data_atl as $atl) { ?>
        <tr>
          <td><a href="<?=base_url('admin/detailcontent/').$atl->id ?>">
            <?= $atl->judul_content ?></a>
          </td>
          <td>
            <?= $atl->tgl_content ?>
          </td>
          
          <td>
           <a type="submit" class="btn btn-warning" href="<?=base_url('admin/editcontent/').$atl->id ?>" > Edit </a>
          </td>
          <td>
            <a type="submit" class="btn btn-danger" href="<?= base_url('/admin/delete/').$atl->id ?>">Hapus</a>
          </td>
        </tr>
        </tr>
    <?php } ?>
    </table>
    <?php echo $paging ?>

  </div>