<?php

    $username = $_POST["username"];
    $password = $_POST["password"];

    $database = new PDO("mysql:host=localhost;dbname=sekolah__php_pdo",'root','');
    $query = $database->query("select * from user where username='$username'");


    if($query){
        $data = $query->fetch();
        if(password_verify($password, $data['password'])){
          session_start();
          $_SESSION["username"] = $username;
          header("Location:index.php");
        }
       
    };
    