<?php 
$serverBaze = "localhost";
$username="root";
$password="";
$bazaPodataka= "sajtPhp";

$konekcija = new PDO("mysql:host=$serverBaze; dbname=$bazaPodataka",$username,$password);
$konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




?>
