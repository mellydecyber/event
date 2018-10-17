<?php
    include_once 'config/database.php';
    include_once 'objects/event.php';
	include_once 'objects/teks_berjalan.php';

    $database = new Database();
    $db = $database->getConnection();
    
    $event = new Event($db);
	$teks = new Teks($db);

    $stmt = $event->tampilkanEvent();
    $result = array();
   
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
     array_push($result, array('image' => $row['image'], 'nama' => $row['nama'], 'keterangan' => $row['keterangan']));
 }
 echo json_encode(array("result" => $result));
 ?>