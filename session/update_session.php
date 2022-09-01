<?php
// setiap menggunakan session, harus diawali dengan session_start
 session_start();

$_SESSION['username'] = "bukan siti";
$_SESSION['id'] = 1;


echo $_SESSION['username'];
echo $_SESSION['id'];
