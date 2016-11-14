
<?php include_once"php/database.php" ?>

<!DOCTYPE html>
<html lang="en">
<?php include_once"php/head.php" ?>
<?php include_once"php/header.php"  ?>



<section id="content">
    <div class="container">
                <section id="mainbar">
                    <?php
                    $sql = "SELECT * FROM content";
                    $result = mysql_query($sql);
                    while ($value=mysql_fetch_array($result)){
                       
                            ?>
                                <div class="blog-wrapper">
                                    <div class="blog-item">
                                                <h1 class="blog-title"> <a href="content.php?id=<?php echo $value['id']; ?>"><?php echo $value['judul_content'] ?></a></h1>
                                        <div class="blog-content" >
                                                <?php echo $value['tgl_content']; ?>
                                            <div class="blog-wrap-content">
                                            <?php echo $value['isi_content']; ?>
                                                <div class="blog-meta"></div>
                                            </div>
                            <a href="content.php?id=<?php echo $value['id']; ?>"> Read More</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                    }
                        ?>
                </section>

</section>
<?php include_once"php/sidebar.php"  ?>
<?php include_once"php/footer.php"  ?>

</body>
</html>