<?php 
include_once 'theme/header.php'; 
// core.php holds pagination variables
include_once 'config/core.php';
 
// include database and object files
include_once 'config/database.php';
include_once 'objects/event.php';
include_once 'objects/teks_berjalan.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
$teks = new Teks($db);
 
$page_title = "Event Prima Husada Cipta Medan";
?>
     
    
      
       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Pengaturan Running Teks
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Teks</a></li>
            <li class="active">Pengaturan</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        
                        $teks->id = '1';
                        $teks->readPengaturan();
                    
                    // if the form was submitted
                   

                    ?>
            <div class="box">
            <div class="box-header with-border">
                  Pengaturan
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
            <form action="<?php echo htmlspecialchars('aksi.php?sender=ubahpengaturan');?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                        <div class="row">

                        <!-- Form Pengaturan                -->
                        <? include 'form.php'; ?>
              
                     
                 <div class="col-md-12 form-group"> 
                   <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-send"></span> Simpan</button>
                 </div>
                </div> 
                  </div></form>
              
                  </div></div>
        
      <!-- Content Wrapper. Contains page content -->
      
     
<?php include 'theme/footer.php'; ?>