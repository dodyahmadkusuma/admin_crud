<style type="text/css"> li.menu{ display: inline; }</style>

<h2>SIMPAN</h2>
<?php  

$post = $_POST['nama'];
$jml = $_POST['jml'];

$id =md5(date('ymdhms').rand());

echo $tambah;


print_r($post);


header('Location: view')
?>

