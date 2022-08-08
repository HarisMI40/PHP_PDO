<?php
require 'koneksi.php';
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
$db = new database();

$query = $db->tambahData('siswa',[$nama,$kelas]);
 if($query){
    header("Location:index.php");
 }
