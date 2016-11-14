<?php
 session_start(); 
 ?>

<?php if(isset($_SESSION['userdata'])) : ?>
<h1>Selamat datang</h1>
<a href="logout.php">Logout</a>

<?php else : ?>
<h1>maaf</h1> <a href="login.php">Kembali</a>
<?php endif ;?>
