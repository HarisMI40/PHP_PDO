<?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form.php");
}
?>
<h1>Halaman Beranda </h1>
<a href="hapus_session.php">Logout</a>
