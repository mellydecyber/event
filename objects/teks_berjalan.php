<?php
class Teks{

    // database connection and table nama
    private $conn;
    private $nama_tabel = "teks_berjalan";
    private $nama_tabel_pengaturan = "pengaturan";

    // object properties
    public $id;
    public $teks;
    public $tanggal;
    public $kecepatan;
    public $status;


    public function __construct($db){
        $this->conn = $db;
    }

    // create running teks
    function create(){

        
       // query insert
        $query = "INSERT INTO " . $this->nama_tabel . "
        SET teks=:teks, tanggal=:tanggal, status=:status";
        $stmt = $this->conn->prepare($query);

        // posted values
        $this->teks=htmlspecialchars(strip_tags($this->teks));
        $this->tanggal=htmlspecialchars(strip_tags($this->tanggal));
        $this->status=htmlspecialchars(strip_tags($this->status));


        // bind values
        $stmt->bindParam(":teks", $this->teks);
        $stmt->bindParam(":tanggal", $this->tanggal);
        $stmt->bindParam(":status", $this->status);


        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }
    
    function tampilkanTeks(){

        $query = "SELECT
        id, teks, tanggal, status
    FROM
    " . $this->nama_tabel . "
        WHERE (flag = '1' AND status = '1' AND tanggal>=now()) OR (flag = '0' AND status = '1' AND tanggal>=now())
        ";

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        return $stmt;
    }
    function readKecepatan(){

        $query = "SELECT
       kecepatan, warna_bg, warna_teks
    FROM
    " . $this->nama_tabel_pengaturan . "
        LIMIT 1";

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        return $stmt;
    }
    function readAll(){

        $query = "SELECT
                    id, teks, tanggal, status
                FROM
                    " . $this->nama_tabel . "
                ORDER BY
                    tanggal ASC
               ";

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        return $stmt;
    }
        // used for paging products
    public function countAll(){

        $query = "SELECT id FROM " . $this->nama_tabel . "";

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();

        $num = $stmt->rowCount();

        return $num;
    }
    function readOne(){

        $query = "SELECT id, teks, tanggal, status
            FROM " . $this->nama_tabel . "
            WHERE id = ?
            LIMIT 0,1";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->teks = $row['teks'];
        $this->tanggal = $row['tanggal'];
        $this->status = $row['status'];
    }
    function readPengaturan(){

        $query = "SELECT kecepatan, warna_bg, warna_teks
            FROM " . $this->nama_tabel_pengaturan . " WHERE id = ?
            LIMIT 0,1";

        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->kecepatan = $row['kecepatan'];
        $this->warna_bg = $row['warna_bg'];
        $this->warna_teks = $row['warna_teks'];
    }
    function updatePengaturan(){

        $query = "UPDATE
                    " . $this->nama_tabel_pengaturan . "
                SET
                 kecepatan=:kecepatan, warna_bg=:warna_bg, warna_teks=:warna_teks
                WHERE
                    id = '1'";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->kecepatan=htmlspecialchars(strip_tags($this->kecepatan));
        $this->warna_bg=htmlspecialchars(strip_tags($this->warna_bg));
        $this->warna_teks=htmlspecialchars(strip_tags($this->warna_teks));
 
        // bind parameters
        $stmt->bindParam(':kecepatan', $this->kecepatan);
        $stmt->bindParam(':warna_bg', $this->warna_bg);
        $stmt->bindParam(':warna_teks', $this->warna_teks);
  
        // execute the query
        if($stmt->execute()){
            return true;
        }

        return false;

    }
    function updateTeks(){

        $query = "UPDATE
                    " . $this->nama_tabel . "
                SET
                teks=:teks, tanggal=:tanggal, status=:status
                WHERE
                    id = :id";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->teks=htmlspecialchars(strip_tags($this->teks));
        $this->tanggal=htmlspecialchars(strip_tags($this->tanggal));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->id=htmlspecialchars(strip_tags($this->id));
 
        // bind parameters
        $stmt->bindParam(':teks', $this->teks);
        $stmt->bindParam(':tanggal', $this->tanggal);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':id', $this->id);
  
        // execute the query
        if($stmt->execute()){
            return true;
        }

        return false;

    }
    // delete the product
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


    /////////////////////////////////////////////////////////////////////////
    // read products by search term
    public function search($search_term, $from_record_num, $records_per_page){

        // select query
        $query = "SELECT
                  *
                FROM
                    " . $this->nama_tabel . "
                WHERE
                    nama LIKE ? OR tanggal LIKE ?
                ORDER BY
                    nama ASC
                LIMIT
                    ?, ?";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind variable values
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
        $stmt->bindParam(2, $search_term);
        $stmt->bindParam(3, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(4, $records_per_page, PDO::PARAM_INT);

        // execute query
        $stmt->execute();

        // return values from database
        return $stmt;
    }

    public function countAll_BySearch($search_term){

        // select query
        $query = "SELECT
                    COUNT(*) as total_rows
                FROM
                    " . $this->nama_tabel . "
                WHERE
                    nama LIKE ?";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind variable values
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row['total_rows'];
    }
    // will upload image file to server

}
?>