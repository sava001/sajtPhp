<?php

// session_start();

include("functions.php");

if(isset($_POST['btnUnesi'])){

    $userName = $_POST['tbIme'];
   
    $pass = $_POST['tbPass'];
    $ulogaId =2;


    register($userName,$pass,$ulogaId);
    // header("location: ../index.php");



}





?>