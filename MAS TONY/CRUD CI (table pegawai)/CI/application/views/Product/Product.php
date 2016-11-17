<html>
	<head>
		<title></title>
	<style type="text/css">
		li.menu {display: inline;}
	</style>
	</head>
	<body>

<table border="" class="table table-hover">
<th>NAMA</th><th colspan="2" >AKSI</th><th>DETAIL</th>
    <?php foreach($data_product as $product) { ?>
        <tr>
            <td>
                
                    <?php echo $product->nama ?>
               
            </td>
            <td>
                <a  class="btn btn-danger" href=" <?php echo base_url('product/delete/' . $product->id_product)?> ">
                	
                hapus
                </a>
            </td>
            <td>
            <a  class="btn btn-warning" href=" <?php echo base_url('product/edit/' . $product->id_product) ?> ">
                edit
            </a>
            </td>
            <td>
                <a  class="btn btn-info" href="<?php echo base_url('product/detail/' . $product->id_product) ?>">
                    view
                </a>
            </td>
    <?php } ?>
        </tr>
</table>
                <a  class="btn btn-success" href=" <?php echo base_url('product/tambah/') ?> ">
                Tambah POST
                </a> 
                 <a  class="btn btn-danger" href=" <?php echo base_url('product/form/') ?> ">
                Tambah GET
                </a>


<div class="pag" >
    
 <?= $paging ?>
</div>



	</body>





</html>