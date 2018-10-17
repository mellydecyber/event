<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
include 'koneksi.php';
$get=$_GET['page'];
 
if ( empty($get))
{
   include ('master/dashboard.php');	
}
elseif ($get=='event')
{
  include ('master/event.php');
}
elseif ($get=='teks')
{
  include ('master/teks.php');
}
elseif ($get=='pengaturan')
{
  include ('master/pengaturan.php');
}
elseif ($get=='slider')
{
  include ('slider.php');
}
?>