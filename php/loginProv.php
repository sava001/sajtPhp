<?php 


include("functions.php");

if(isset($_POST['stisni'])){
 

    $imeI = $_POST['imen'];
    $passI =($_POST['paswor']);

    login($imeI,$passI);
}

?>