<style type="text/css"> li.menu{ display: inline; }</style>

<h2>SIMPAN</h2>
<?php  

$post = $_POST['nama'];
$telp = $_POST['telp'];

$id =md5(date('ymdhms').rand());

echo $tambah;


print_r($post);


header('Location: view')
?>

