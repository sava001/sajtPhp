<?php
  include("functions.php");

var_dump ($id);
if (isset($_POST['save'])) {

  $id = $_POST['save'];
$slika =$_POST['slik'];
$nesto =  $_POST['texta'];
$bla = $_POST['area'];

updateCategori($id,$slika,$nesto,$bla);
header("location: ../admin.php");
}
?>