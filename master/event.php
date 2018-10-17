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
 
$event = new Event($db);
$teks = new Teks($db);
 
$page_title = "Event Prima Husada Cipta Medan";
?>
     
     
       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             EVENT RS PHCM
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Event</a></li>
            <li class="active">List Event</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        if(isset($_GET['id'])){
                        $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
                        }
                        $event->id = $id;
                        $event->readOne();
                    
                    // if the form was submitted
                   

                    ?>
            <div class="box">
            <div class="box-header with-border">
                  Edit Event
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
            <form action="<?php echo htmlspecialchars('aksi.php?sender=editevent');?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                        <div class="row">
                      <div class="col-md-12 form-group">
                          <label>Nama</label>
                          <input readonly="" type="hidden" name="id" value="<?php echo $event->id; ?>" class="form-control" placeholder="Enter..." required="">
                          <input type="text" name="nama" value="<?php echo $event->nama; ?>" class="form-control" placeholder="Enter..." required="">
                      </div>  
                     <div class="col-md-12 form-group">
                         <label>Keterangan</label>
                         <textarea class="form-control" placeholder="Enter..." name="keterangan" type="text"><?php echo $event->keterangan; ?></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                          <label>Gambar</label>
                          <?php if(isset($_GET['id'])){
                            ?>
                        <img src='uploads/<?= $event->image; ?>' style='width:300px;' />
                        <?php }?>
                          <input type="hidden" name="gambar" value='<?= $event->image; ?>'/><input type="file" name="image"/>
                      </div> 
                      <div class="col-md-12 form-group">
                         
              <div class="form-group">
                <label>Tanggal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tanggal" name='tgl' value='<?= $event->tgl; ?>'>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                      </div>
                      <div class="col-md-12 form-group">
                          <label>Status</label>
                          <select class='form-control' name='status'>
                          <?php
                          $status = $event->status;
                          if($status == '1'){
                              ?>
                                  <option value='1' selected >Aktif</option>
                                  <option value='0'>Tidak Aktif</option>
                                  </select>
                              <?
                          }else{
                              ?>
                              <option value='1'>Aktif</option>
                                  <option value='0' selected>Tidak Aktif</option>
                                  </select>
                          <? } ?>
                      </div>
                     
                 <div class="col-md-12 form-group"> 
                   <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-send"></span> Simpan</button>
                 </div>
                </div> 
                  </div></form>
              </div>
                   
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> <a href="#" data-toggle="modal" data-target="#my-modal1" class="btn btn-info"><li class="fa fa-plus"></li> Tambah</a></h3>
              <div class="box-tools pull-right">
                 </div>
            </div>
            <div class="box-body">
                               <table id="event" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $stmt = $event->readAll();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){           
                          extract($row);

                    ?>
                    
                        <tr>
                        
                <td><?php echo $nama; ?></td>
                <td><?php echo $tanggal; ?></td>
                
                <?php if($status == '0'){ ?>
                <td><span class="badge bg-red">Tidak AKtif</span></td>
                <?php }else{ ?>
                  <td><span class="badge bg-green">Aktif</span></td>
                  <?php } ?>

                            <td>
                                <a href="<?php $_SERVER[SCRIPT_NAME] ;?>?page=event&id=<?php echo $id; ?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a> 
                                <a href="aksi.php?sender=hapusevent&id=<?php echo  $id; ?>" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a> 
                             </td>
                        </tr> 
                <?php    }
                  ?>
                    </tbody>
                   
                     
                  </table>
            </div><!-- /.box-body -->
             
          </div><!-- /.box --> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      <!-- Bootstrap Modal - To Add New Record -->
<!-- Modal -->

<div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
       
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="myModalLabel">Tambah Event</h4>
</div>
<form action="<?php echo htmlspecialchars('aksi.php?sender=event');?>" method="post" enctype="multipart/form-data">
<div class="modal-body center"> 
 <!--Content-->
 
 <div class="col-md-12 form-group">
                          <label>Nama</label>
                          <input readonly="" type="hidden" name="id"  class="form-control" placeholder="Enter..." required="">
                          <input type="text" name="nama"  class="form-control" placeholder="Enter..." required="">
                      </div>  
                     <div class="col-md-12 form-group">
                         <label>Keterangan</label>
                         <textarea class="form-control" placeholder="Enter..." name="keterangan" type="text"></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                          <label>Gambar</label>
                          
                          <input type="hidden" name="gambar" /><input type="file" name="image"/>
                      </div> 
                      <div class="col-md-12 form-group">
                         
              <div class="form-group">
                <label>Tanggal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="tanggalModal" name='tgl'>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                      </div>
                      <div class="col-md-12 form-group">
                          <label>Status</label>
                          <select class='form-control' name='status'>
                         
                              <option value='1'>Aktif</option>
                                  <option value='0' >Tidak Aktif</option>
                              </select>
                      </div>
 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-info"> Simpan</button> 
  
</div>
   
</div>
</div>
</div>
</form>

      <!-- Content Wrapper. Contains page content -->
      
     
<?php include 'theme/footer.php'; ?>