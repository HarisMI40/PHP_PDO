<?php

 $nama = htmlentities(trim($_POST['nama']));
 /**
  *  htmlentities digunakan agar text tidak di anggap script, mencecgah html injection
  *  trim digunakan untuk menghapus spasi, selain spasi bisa juga digunakan untuk menghapus simbol yang lain
  */

 $kelas = $_POST['kelas'];
 $pesan_error = "";

 if(empty($nama)){
   $pesan_error .= "Data tidak boleh kosong";
 }

 if($pesan_error == ""){ // jika error kosong
   $database = new PDO("mysql:host=localhost;dbname=sekolah__php_pdo",'root','');
   $query = $database->query("insert into siswa values('','$nama','$kelas')");

   if($query){
      header("Location:index.php");
   }

 }else{ // jika ada error
   header("Location:tambah.php?error=$pesan_error");
 }


 
