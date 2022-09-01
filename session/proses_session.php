<?php
    // memulai session
    session_start();

    $_SESSION['username'] = $_POST["username"];
    $_SESSION['id'] = $_POST['id'];

