<style type="text/css"> 

li.menu{ display: inline;}
a {text-align: center;}
table th {text-align: center;}


</style>



<table border="" class="table table-hover">
<th>NAMA</th><th colspan="2" >AKSI</th><th>DETAIL</th>
    <?php foreach($data_handphone as $handphone) { ?>
        <tr>
            <td>
                
                    <?php echo $handphone->nama ?>
               
            </td>
            <td>
                <a  class="btn btn-danger" href=" <?php echo base_url('handphone/delete/' . $handphone->id_handphone)?> ">
                	
                hapus
                </a>
            </td>
            <td>
            <a  class="btn btn-warning" href=" <?php echo base_url('handphone/edit/' . $handphone->id_handphone) ?> ">
                edit
            </a>
            </td>
            <td>
                <a  class="btn btn-info" href="<?php echo base_url('handphone/detail/' . $handphone->id_handphone) ?>">
                    view
                </a>
            </td>
    <?php } ?>
        </tr>
</table>
                <a  class="btn btn-success" href=" <?php echo base_url('handphone/tambah/') ?> ">
                Tambah POST
                </a> 
                 <a  class="btn btn-danger" href=" <?php echo base_url('handphone/form/') ?> ">
                Tambah GET
                </a>


<div class="pag" >
    
 <?= $paging ?>
</div>


