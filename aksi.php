<?php
include 'koneksi.php';
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

$g=$_GET['sender'];
if($g=='event')
{
    $event->nama = $_POST['nama'];
    $event->keterangan = $_POST['keterangan'];
    $event->flag = $_POST['jenis'];
    $image=!empty($_FILES["image"]["name"])
    ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"]) : "";
    $event->image = $image;
    $wew = $_POST['tanggalModal'];
    $event->tgl = $_POST['tgl'];
    $event->status = $_POST['status'];

    // create the product
    if($event->create()){
        echo '<script LANGUAGE="JavaScript">
            alert("Event '. $event->tgl.' telah Tersimpan")
            window.location.href="index.php?page=event";
            </script>'; 
                // try to upload the submitted file
        // uploadPhoto() method will return an error message, if any.
        echo $event->uploadPhoto();
    }
 
    // if unable to create the product, tell the user
    else{
        echo '<script LANGUAGE="JavaScript">
        alert("Gagal")
        window.location.href="index.php?page=event";
        </script>'; 
    }
     //header('location:http://localhost/');
}

else 
    if($g=='editevent')
    {
            $event->id = $_POST['id'];
            // set product property values
            $event->nama = $_POST['nama'];
            $event->keterangan = $_POST['keterangan'];
            $event->image = $_POST['image'];
            $image=!empty($_FILES["image"]["name"])
                ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"]) : "";
                

                if(!empty($image)){
          
                    $event->image = $image;
                }else{
        
                    $event->image = $_POST['gambar'];
            
                }
          
            $event->tgl = $_POST['tgl'];
            $event->status = $_POST['status'];
        
            // update the product
            if($event->update()){
                echo '<script LANGUAGE="JavaScript">
            alert("Event ' .$event->tgl.'  Telah di Edit")
            window.location.href="index.php?page=event";
            </script>'; 
                if(!empty($image)){
                echo $event->uploadPhoto();
                }else{
                    $event->image = $_POST['gambar'];
                }
        

    } 
}

else 
    if($g=='hapusevent')
    {
            $event->id = $_GET['id'];
            
    // delete the product
    if($event->delete()){
        echo '<script LANGUAGE="JavaScript">
        alert("Event Dihapus Dengan ID '.$event->id.'.")
        window.location.href="index.php?page=event";
        </script>';
    }
    // if unable to delete the product
    else{
        echo '<script LANGUAGE="JavaScript">
            alert("Gagal")
            window.location.href="index.php?page=event";
            </script>'; 
    }
    }
else 
    if($g=='teks')
    {
        $teks->teks = $_POST['teks'];
        $teks->tanggal = $_POST['tanggalteksmodal'];
        $teks->status = $_POST['status'];
    
        if($teks->create()){
            echo '<script LANGUAGE="JavaScript">
            alert("Teks '. $teks->tanggal .' telah Tersimpan")
            window.location.href="index.php?page=teks";
            </script>'; 
        }
     
        else{
            echo '<script LANGUAGE="JavaScript">
            alert("Gagal")
            window.location.href="index.php?page=teks";
            </script>'; 
        }
    }
else 
    if($g=='editteks')
    {
        $teks->teks = strtoupper($_POST['teks']);
        $teks->tanggal = $_POST['tanggalteks'];
        $teks->status = $_POST['status'];
        $teks->id = $_POST['id'];
     
        if($teks->updateTeks()){
            echo '<script LANGUAGE="JavaScript">
            alert("Teks telah di Edit")
            window.location.href="index.php?page=teks";
            </script>'; 
        }
     
        else{
            echo '<script LANGUAGE="JavaScript">
            alert("Gagal")
            window.location.href="index.php?page=teks";
            </script>'; 
        }
}

else 
    if($g=='hapusteks')
    {
            $teks->id = $_GET['id'];
            
    // delete the product
    if($teks->delete()){
        echo '<script LANGUAGE="JavaScript">
        alert("Event Dihapus Dengan ID '.$teks->id.'.")
        window.location.href="index.php?page=teks";
        </script>';
    }
    // if unable to delete the product
    else{
        echo '<script LANGUAGE="JavaScript">
        alert("Gagal")
        window.location.href="index.php?page=teks";
        </script>'; 
    }
    }
    else 
    if($g=='ubahpengaturan')
    {
        $teks->kecepatan = $_POST['kecepatan'];
        $teks->warna_bg = $_POST['warna_bg'];
        $teks->warna_teks = $_POST['warna_teks'];
        $teks->id = $_POST['id'];
    
        if($teks->updatePengaturan()){
            echo '<script LANGUAGE="JavaScript">
            alert("Pengaturan Teks Telah Disimpan")
            window.location.href="index.php?page=pengaturan";
            </script>';
        }
     
        else{
            echo '<script LANGUAGE="JavaScript">
        alert("Gagal")
        window.location.href="index.php?page=pengaturan";
        </script>';
        }
    }

//End Aksi Anggota
?>
