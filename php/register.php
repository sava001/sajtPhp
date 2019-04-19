<?php

session_start();

include("functions.php");

if(isset($_POST['btnUnesi'])){
    $userName = $_POST['tbIme'];
    $pass = $_POST['tbPass'];
    $ulogaId =2;

    $pregUaer = "/^[\w#@!]{4,20}$/";
    $pregPass = "/^[\w#@!]{4,20}$/";

    if($userName=='' || $pass=='')
    {
        echo"<h2> sva polja moraju biti popunjena";
        exit;
    }
    if (!preg_match($pregUaer,$userName) && !preg_match($pregPass,$pass))
    {
        $_SESSION['greska']="pogresan unos username ili pasworda";
        echo "<h2> pogresan unos username ili pasworda </h2>";

        exit;
    }
    else{
        register($userName,$pass,$ulogaId);
        // header("location: ../index.php");
    }


    
   
    
   


 



}





?>