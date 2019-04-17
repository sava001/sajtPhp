<?php
include("functions.php");


if (isset($_POST['saki'])) {
echo"jedan danda";

$slika =$_FILES['file'];

$slikaName =$_FILES['file']['name'];
$slikaTmpName =$_FILES['file']['tmp_name'];
$slikaSize =$_FILES['file']['size'];
$slikaError =$_FILES['file']['error'];
$slikaType =$_FILES['file']['type'];
print_r($slikaTmpName);



$slikaExt = explode('.',$slikaName );
$slikaActualExt = strtolower(end($slikaExt));

$allowed = array('jpg','jpeg','png','pdf');


if(in_array($slikaActualExt, $allowed))
{
    if($slikaError===0)
    {
        if($slikaSize < 1000000)
        {
            $slikaNameNew = uniqid('', true).'.'.$slikaActualExt;
            $slikaDestinacion ='images/'.$slikaNameNew;
            move_uploaded_file($slikaTmpName,$slikaDestinacion);
            // header("location: ../admin.php");
            var_dump($slikaNameNew);
            var_dump($slikaDestinacion);

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


 die();
var_dump($slikaTmpName);
insertCategory($nesto,$slikaName,$bla);
 //header("location: ../admin.php");
}

?>