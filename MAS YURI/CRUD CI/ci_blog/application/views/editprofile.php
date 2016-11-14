<div class="content-wrapper">
<style type="text/css">
img{
	width: 215px;
	height: 215px;
}
</style>

<?= form_open_multipart('admin/uploadprofile/'); ?>
	<input type="hidden" name="id" value="<?=$user->id; ?>">
<div class="user-panel">
          <center><img src="<?= base_url('dashboard/')?>dist/img/avatar.png" class="img-circle" alt="User Image"></center>
     <label>Photo Profile</label><small>(maksimal ukuran 1000kb)</small>
 <input class="form-control" type="file" name="avatar" >
	


 <label>Nama</label><input class="form-control" type="text" name="name_user" value="<?=$user->name_user  ?>">
 <label>Telepon</label><input class="form-control" type="text" name="telepon" value="<?=$user->telepon  ?>">
 <label>Alamat</label><input class="form-control" type="text" name="alamat" value="<?=$user->alamat  ?>">
   	<center>
          <input class="btn btn-info" type="submit" value="Save">
          <a class="btn btn-info" href="<?=base_url('admin/profile/') ?>">Cancel</a>
   	</center>
      </div>
<?= form_close();  ?>


</div>