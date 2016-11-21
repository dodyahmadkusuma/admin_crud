<style type="text/css"> 

li.menu{ display: inline;}
a {text-align: center;}
table th {text-align: center;}


</style>



<table border="" class="table table-hover" id="TableSaya">
<th>NAMA</th><th colspan="2" >AKSI</th><th>DETAIL</th>
    <?php foreach($data_pegawai as $pegawai) { ?>
        <tr>
            <td>
                
                    <?php echo $pegawai->nama ?>
               
            </td>
            <td>
                <a  class="btn btn-danger" href=" <?php echo base_url('pegawai/delete/' . $pegawai->id_pegawai)?> ">
                	
                hapus
                </a>
            </td>
            <td>
            <a  class="btn btn-warning" href=" <?php echo base_url('pegawai/edit/' . $pegawai->id_pegawai) ?> ">
                edit
            </a>
            </td>
            <td>
                <a  class="btn btn-info" href="<?php echo base_url('pegawai/detail/' . $pegawai->id_pegawai) ?>">
                    view
                </a>
            </td>
    <?php } ?>
        </tr>
</table>
                <a  class="btn btn-success" href=" <?php echo base_url('pegawai/tambah/') ?> ">
                Tambah POST
                </a> 
                 <a  class="btn btn-danger" href=" <?php echo base_url('pegawai/form/') ?> ">
                Tambah GET
                </a>


<div class="pag" >
    
 <?= $paging ?>
</div>


