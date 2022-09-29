<?php
session_start();
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $database = new PDO("mysql:host=localhost;dbname=sekolah__php_pdo",'root','');
    $query = $database->query("insert into user values('', '$username', '$password')");

    if($query){
      $_SESSION['username'] = $username;
        header("Location:index.php");
    }