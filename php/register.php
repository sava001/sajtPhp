<?php

// session_start();
include("functions.php");

if(isset($_POST['btnUnesi'])){

    $ime = $_POST['tbIme'];
    $prezime = $_POST['tbPrezime'];
    $pass = $_POST['tbPass'];

    register($ime,$prezime,$password);
    header("location: ../index.php");

}





?>