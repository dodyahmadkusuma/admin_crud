<?php 
include_once('php/database.php');
$id= $_GET['id'];
$sql="SELECT 
			*
		FROM 
			content
		WHERE 
			content.id ='{$id}'
	";

$result = mysql_query($sql);
$data = mysql_fetch_array($result);

 ?>

<?php include_once"php/database.php" ?>

<!DOCTYPE html>
<html lang="en">
<?php include_once"php/head.php" ?>
<?php include_once"php/header.php"  ?>



<section id="content">
    <div class="container">
                <section id="mainbar">
                    
                                <div class="blog-wrapper">
                                    <div class="blog-item">
                                                
                                            <div class="blog-wrap-content">
                                                <h1 class="blog-title"><?php echo $data['judul_content']; ?></h1>
                                           
                                                <div class="blog-meta"></div>
                                        <div class="blog-content" > <?php echo $data['isi_content'] ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
                </section>

</section>
<?php include_once"php/sidebar.php"  ?>
<?php include_once"php/footer.php"  ?>

</body>
</html>