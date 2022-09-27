<?php
class koneksi{
    function koneksi(){
        return "ini adalah koneksi";
    }
}

$koneksi1 = new koneksi();
echo $koneksi1->koneksi();