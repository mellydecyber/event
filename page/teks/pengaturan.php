<?php
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
 
include_once '../config/database.php';
include_once '../objects/teks_berjalan.php';
 
$database = new Database();
$db = $database->getConnection();
 
$teks = new Teks($db);
 
$teks->id = $id;
 
$teks->readPengaturan();

$page_title = "Edit Teks";
include_once "header.php";

echo "<div class='right-button-margin'>";
echo "<a href='index.php' class='btn btn-default pull-right'>Home</a>";
echo "</div>";
?>

<?php 
if($_POST){
 
    $teks->kecepatan = $_POST['kecepatan'];
    $teks->warna_bg = $_POST['warna_bg'];
    $teks->warna_teks = $_POST['warna_teks'];
    $teks->id = $_POST['id'];

    if($teks->updatePengaturan()){
        echo "<div class='alert alert-success alert-dismissable'>";
            echo "Pengaturan Teks Telah Diubah.";
        echo "</div>";
    }
 
    else{
        echo "<div class='alert alert-danger alert-dismissable'>";
            echo "Gagal mengedit.";
        echo "</div>";
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post" enctype="multipart/form-data">
    <table class='table table-hover table-responsive table-bordered'>
 
       
    <?php
    if($teks->kecepatan == '2'){
        ?>
       <div class="col-md-12 form-group">
                          <label>Kecepatan</label>
            <select class='form-control' name='kecepatan'>
                <option value='2' selected >Pelan</option>
                <option value='5'>Sedang</option>
                <option value='8'>Cepat</option>  
                <option value='10'>Sangat Cepat</option>
                <option value='15'>Sangat Sangat Cepat</option>        
            </select>
            </div>  
        <?php
    }elseif($teks->kecepatan == '5'){
        ?>
        
        <div class="col-md-12 form-group">
                          <label>Kecepatan</label>
            <select class='form-control' name='kecepatan'>
                <option value='2'  >Pelan</option>
                <option value='5' selected>Sedang</option>
                <option value='8'>Cepat</option>  
                <option value='10'>Sangat Cepat</option>
                <option value='15'>Sangat Sangat Cepat</option>        
            </select>            
            </div>  
        <?php
    }elseif($teks->kecepatan == '8'){
        ?>
        <div class="col-md-12 form-group">
                          <label>Kecepatan</label>
            <select class='form-control' name='kecepatan'>
                <option value='2'  >Pelan</option>
                <option value='5' >Sedang</option>
                <option value='8' selected>Cepat</option>  
                <option value='10'>Sangat Cepat</option>
                <option value='15'>Sangat Sangat Cepat</option>        
            </select>
            </div>  
        <?php
    }elseif($teks->kecepatan == '10'){
        ?>
         <div class="col-md-12 form-group">
                          <label>Kecepatan</label>
            <select class='form-control' name='kecepatan'>
                <option value='2'  >Pelan</option>
                <option value='5' >Sedang</option>
                <option value='8'>Cepat</option>  
                <option value='10' selected>Sangat Cepat</option>
                <option value='15'>Sangat Sangat Cepat</option>        
            </select>      
            </div>  
        <?php
    }elseif($teks->kecepatan == '15'){
        ?>
        <div class="col-md-12 form-group">
                          <label>Kecepatan</label>
            <select class='form-control' name='kecepatan'>
                <option value='2'  >Pelan</option>
                <option value='5' selected>Sedang</option>
                <option value='8'>Cepat</option>  
                <option value='10'>Sangat Cepat</option>
                <option value='15' selected>Sangat Sangat Cepat</option>        
            </select>            
            </div>  
    <?php } ?>
    
        <?php
        require_once 'dropdown.php';
        ?>


        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </td>
        </tr>
 
    </table>
</form>
<?php
 

// set page footer
include_once "footer.php";
?>