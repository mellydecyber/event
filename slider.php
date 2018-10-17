
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rumah Sakit Prima Husada Cipta Medan</title>

    <?php
    include_once 'config/database.php';
    include_once 'objects/event.php';
	include_once 'objects/teks_berjalan.php';

    $database = new Database();
    $db = $database->getConnection();
    
    $event = new Event($db);
	$teks = new Teks($db);

    $stmt = $event->tampilkanEvent();
    ?>

    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
        <?php
                   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
                    extract($row);
                               
                    ?>
                    <?php 
                    if(empty($image)){
                        ?>
            <div data-thumb="uploads/d1c24ca7a8479401d2067b2454be410112fe6b84-beverage-3157395_960_720.jpg" data-src="uploads/d1c24ca7a8479401d2067b2454be410112fe6b84-beverage-3157395_960_720.jpg">
            <?php         
                    }else{
                        ?>
            <div data-thumb="uploads/<?= $image; ?>" data-src="uploads/<?= $image; ?>">
            <?php
                    }
            ?>
                <div class="camera_caption">
                   <div class="container">             
                   <center>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.3s">
                        <hr size="2" width="60%">
                        <?= $nama; ?>
                        </h3>
                        <hr size="2" width="60%">
                        <p class=" wow fadeInUp animated" data-wow-delay="0.5s"><?= $keterangan; ?></p>
                        </center>          
                       
                   </div>
                </div>
            </div>
            <?php
                        }
			
                        ?>
        </div>
    </section>
    <!-- End Slider area -->
    <div>
	
    <?php 
                    $stmt = $teks->readKecepatan(); 
                    if($stmt == FALSE){
                        die(mysql_error());
                    }
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        extract($row);
                                        ?>
     <marquee bgcolor='<?= $warna_bg; ?>' scrollamount='<?= $kecepatan; ?>'
                                        ><h1><font color='<?= $warna_teks; ?>'><?php } ?><?php 
                    $stmt = $teks->tampilkanTeks(); 
                    if($stmt == FALSE){
                        die(mysql_error());
                    }
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        extract($row);
                                        ?><?= $teks; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php } ?></font><h1></marquee>
</div>
<!-- <input type"text" id="data"> -->
<!-- <ul></ul> -->
<!-- <script src="libs/js/jquery-3.3.1.min.js"></script>
<script src="libs/js/jquery-3.3.1.js"></script>
<script src="tampil.js"></script> -->
  <!-- Footer Area -->
        <?php
        
        include_once 'desain.php';
        ?>
    <!-- End Footer Area -->

