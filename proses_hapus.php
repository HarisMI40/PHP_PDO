<?php 
class koneksi_database{

};

$koneksi = new koneksi_database();

require "koneksi.php";
$id = $_GET['id'];

$database = new database();
$query = $database->hapus('siswa', ['id' => $id]);

if($query){
   header("Location:index.php");
}
