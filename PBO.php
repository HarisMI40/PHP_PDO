<?php
class koneksi{
    public $nama ="akbar"; //attribut

    // method
    function tampilkan(){ 
        echo "menampilkan text <br />";
    }

    function tampilkan_variabel(){
        
    }
}

//jadikan objek
$tampil = new koneksi();
echo $tampil->nama."<br />";

//memanggil function
$tampil->tampilkan(); 
$tampil->tampilkan();  


