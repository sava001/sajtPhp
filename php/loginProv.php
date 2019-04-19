<?php 


include("functions.php");

if(isset($_POST['stisni'])){
 

    $imeI = $_POST['imen'];
    $passI =($_POST['paswor']);



    $pregUaer = "/^[\w#@!]{4,20}$/";
    $pregPass = "/^[\w#@!]{4,20}$/";

    if($imeI=='' || $passI=='')
    {
        echo"<h2> sva polja moraju biti popunjena";
        exit;
    }
    if (!preg_match($pregUaer,$imeI) && !preg_match($pregPass,$passI))
    {
        $_SESSION['greska']="pogresan unos username ili pasworda";
        echo "<h2> pogresan unos username ili pasworda </h2>";

        exit;
    }
    else{
        login($imeI,$passI);
    }

    
}

?>