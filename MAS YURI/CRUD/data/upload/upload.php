<<<<<<< HEAD
<?php  
echo "<pre>";
print_r ($_FILES);
echo "</pre>";
$uploaddir = 'file/';
$namafile = date('Ymdhms') . '_wawan.png';
$uploadfile = $uploaddir . $namafile;
echo '<pre>';
if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
// untuk menghapus file
// unlink($uploadfile);
=======
<?php  
echo "<pre>";
print_r ($_FILES);
echo "</pre>";
$uploaddir = 'file/';
$namafile = date('Ymdhms') . '_wawan.png';
$uploadfile = $uploaddir . $namafile;
echo '<pre>';
if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
// untuk menghapus file
// unlink($uploadfile);
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
?>