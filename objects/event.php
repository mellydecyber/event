<?php
class Event{
 
    // database connection and table nama
    private $conn;
    private $nama_tabel = "slider";
 
    public $id;
    public $nama;
    public $keterangan;
    public $tanggal;
    public $tgl;
    public $image;
    public $gambar;
    public $status;
    public $flag;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    function create(){
 
        $query = "INSERT INTO " . $this->nama_tabel . "
        SET nama=:nama, keterangan=:keterangan, tanggal=:tanggal, tgl=:tgl, image=:image, flag=:flag, status=:status";
        $stmt = $this->conn->prepare($query);
 
        $this->nama=htmlspecialchars(strip_tags($this->nama));
        $this->keterangan=htmlspecialchars(strip_tags($this->keterangan));
        $this->flag=htmlspecialchars(strip_tags($this->flag));
        $this->image=htmlspecialchars(strip_tags($this->image));
        $this->tgl=htmlspecialchars(strip_tags($this->tgl));
        $this->status=htmlspecialchars(strip_tags($this->status));
 
        $this->tanggal = date('Y-m-d H:i:s');
 
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":keterangan", $this->keterangan);
        $stmt->bindParam(":flag", $this->flag);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":tanggal", $this->tanggal);
        $stmt->bindParam(":tgl", $this->tgl);
        $stmt->bindParam(":status", $this->status);
       
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }
    function filterGo($from_record_num, $records_per_page){
        
        $query = "SELECT
                    id, nama, keterangan, tanggal, image, status
                FROM
                    " . $this->nama_tabel . "
                    WHERE flag = '0' AND status = ?
                ORDER BY
                    nama ASC
                    LIMIT
                    {$from_record_num}, {$records_per_page}";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->status);
        $stmt->execute();
     
        return $stmt;

    }
    function tampilkanEvent(){

        $query = "SELECT
                    nama, keterangan, tanggal, (SUBSTRING(tgl, -10)) as tgl_event, image, flag, status
                FROM  " . $this->nama_tabel . "
                    WHERE (flag = '1' AND status = '1' AND tgl>=now()) or (flag='0' and status = '1')
                ORDER BY
                    nama ASC";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }
    function readAll(){
        
        $query = "SELECT
                    id, nama, keterangan, tanggal, image, status
                FROM
                    " . $this->nama_tabel . "
                ORDER BY
                    nama ASC
               ";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
     
        return $stmt;
    }
    public function countAll(){
    
        $query = "SELECT id FROM " . $this->nama_tabel . "";
    
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
    
        $num = $stmt->rowCount();
    
        return $num;
    }
    function readOne(){
 
        $query = "SELECT nama, keterangan, tanggal, image, tgl, status
            FROM " . $this->nama_tabel . "
            WHERE id = ?
            LIMIT 0,1";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->nama = $row['nama'];
        $this->keterangan = $row['keterangan'];
        $this->tanggal = $row['tanggal'];
        $this->tgl = $row['tgl'];
        $this->image = $row['image'];
        $this->status = $row['status'];
    }
    function update(){
 
        $query = "UPDATE
                    " . $this->nama_tabel . "
                SET
                nama=:nama, keterangan=:keterangan, tgl=:tgl, image=:image, status=:status
                WHERE
                    id = :id";
     
        $stmt = $this->conn->prepare($query);
     
        $this->nama=htmlspecialchars(strip_tags($this->nama));
        $this->keterangan=htmlspecialchars(strip_tags($this->keterangan));
        $this->tgl=htmlspecialchars(strip_tags($this->tgl));
        $this->image=htmlspecialchars(strip_tags($this->image));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->id=htmlspecialchars(strip_tags($this->id));
     
        $stmt->bindParam(':nama', $this->nama);
        $stmt->bindParam(':keterangan', $this->keterangan);
        $stmt->bindParam(':tgl', $this->tgl);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':id', $this->id);
     
        if($stmt->execute()){
            return true;
        }
     
        return false;
         
    }
    function delete(){
    
        $query = "DELETE FROM " . $this->nama_tabel . " WHERE id = ?";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
    
        if($result = $stmt->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function search($search_term, $from_record_num, $records_per_page){
    
        $query = "SELECT
                   nama, keterangan, tanggal, image, tgl
                FROM
                    " . $this->nama_tabel . " 
                WHERE
                    nama LIKE ? OR tanggal LIKE ?
                ORDER BY
                    nama ASC
                LIMIT
                    ?, ?";
    
        $stmt = $this->conn->prepare( $query );
    
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
        $stmt->bindParam(2, $search_term);
        $stmt->bindParam(3, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(4, $records_per_page, PDO::PARAM_INT);
    
        $stmt->execute();
    
        return $stmt;
    }
 
    public function countAll_BySearch($search_term){
    
        $query = "SELECT
                    COUNT(*) as total_rows
                FROM
                    " . $this->nama_tabel . "
                WHERE
                    nama LIKE ?";
    
        $stmt = $this->conn->prepare( $query );
    
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
    
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $row['total_rows'];
    }
    function uploadPhoto(){
    
        $result_message="";
    
        if($this->image){
    
            $target_directory = "uploads/";
            $target_file = $target_directory . $this->image;
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    
            $file_upload_error_messages="";
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check!==false){
        }else{
            $file_upload_error_messages.="<div>File yang dimasukkan bukan image</div>";
        }
        
        $allowed_file_types=array("jpg", "jpeg", "png", "gif");
        if(!in_array($file_type, $allowed_file_types)){
            $file_upload_error_messages.="<div>Hanya FIle JPG, JPEG, PNG dan GIF yang diijinkan .</div>";
        }
        
        if(file_exists($target_file)){
            $file_upload_error_messages.="<div>image Sudah ada, Silahkan Ganti namanya</div>";
        }
        
        if($_FILES['image']['size'] > (1024000)){
            $file_upload_error_messages.="<div>image Harus Kurang dari 1 MB</div>";
        }
        
        if(!is_dir($target_directory)){
            mkdir($target_directory, 0777, true);
        }
        if(empty($file_upload_error_messages)){
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
            }else{
                $result_message.="<div class='alert alert-danger'>";
                    $result_message.="<div>Gagal Mengunggah image.</div>";
                    $result_message.="<div>Perbarui Record untuk Mengunggah image</div>";
                $result_message.="</div>";
            }
        }
        
        else{
            $result_message.="<div class='alert alert-danger'>";
                $result_message.="{$file_upload_error_messages}";
                $result_message.="<div>Perbarui Record untuk Mengunggah image.</div>";
            $result_message.="</div>";
        }
    
        }
    
        return $result_message;
    }
    
}
?>