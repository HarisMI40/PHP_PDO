<?php
 class koneksi{
    function getKoneksi(){
        return new PDO("mysql:host=localhost;dbname=sekolah__php_pdo",'root','');
    }
    
 }
