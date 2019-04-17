<?php
include("functions.php");


if (isset($_POST['saki'])) {


$slika =$_FILES['file'];

$slikaName =$_FILES['file']['name'];
$slikaTmpName =$_FILES['file']['tmp_name'];
$slikaSize =$_FILES['file']['size'];
$slikaError =$_FILES['file']['error'];
$slikaType =$_FILES['file']['type'];

$slikaExt = explode('.',$slikaName );
$slikaActualExt = strtolower(end($slikaExt));

$allowed = array('jpg','jpeg','png');

if(in_array($slikaActualExt, $allowed))
{
    if($slikaError===0)
    {
        if($slikaSize < 1000000)
        {
            $dirpath = dirname(getcwd());
            $slikaDestinacion =$dirpath.'/'.'images/'.basename($slikaName);
            move_uploaded_file($slikaTmpName,$slikaDestinacion);
            // header("location: ../admin.php");

        }else{
            echo"slika je prevelike velicine";
        }
       
    }else{
        echo"greska pri ucitavanju slike";
    }
}else{
    echo"ne mozete upovadovati fijal";
}

$nesto =  $_POST['dodText'];
$bla = $_POST['dodArea'];

insertCategory($nesto,$slikaName,$bla);
 //header("location: ../admin.php");
}

?>