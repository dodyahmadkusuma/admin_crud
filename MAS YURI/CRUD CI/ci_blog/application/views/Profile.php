<div class="content-wrapper">
<style type="text/css">
img{
	width: 215px;
	height: 215px;
}
</style>
<center>
	
<div class="user-panel">
          <img src="<?= base_url('dashboard/')?>dist/img/avatar.png" class="img-circle" alt="User Image">
       
<table  style="text-align: left;">
	


<td> <label>Nama</label></td><td><?= ": ".$user->name_user  ?></td><tr>
 <td><label>Telepon</label></td><td><?= ": ".$user->telepon  ?></td><tr>
 <td><label>Alamat</label></td><td><?= ": ".$user->alamat  ?></td>
 	
</table>    	
          
      </div>




</center>
          <a class="btn btn-default" href="<?=base_url('admin/editprofile/') ?>">Edit Profile</a>
</div>