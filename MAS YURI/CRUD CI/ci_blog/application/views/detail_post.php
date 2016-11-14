<div class="content-wrapper">
<style type="text/css"> small{
  opacity: 100%;
}
  </style>
   <form action="<?=base_url('admin/simpancontent/')?>" method="GET" class="form-group">
    <label>Judul</label>
    <input class="form-control" type="text" name="judul_content" value="<?= $content->judul_content;
     ?>">
     <input type="hidden" name="tgl_content" value="<?php echo $content->tgl_content;?>">
    <label>Isi Content</label>
    <textarea class="form-control" type="text" name="isi_content" value="" rows="15"> <?=$content->isi_content?> </textarea>

    <input class="form-control" type="hidden" name="id" value="<?=$content->id?>">

    <input class="btn btn-default" type="submit" name="" value="Simpan">
  </form>
  </div>