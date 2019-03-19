<?php 
$serverBaze = "localhost";
$username="root";
$password="";
$bazaPodataka= "sajtPhp";

try{
$konekcija = new PDO("mysql:host=$serverBaze; dbname=$bazaPodataka",$username,$password);
echo("uspesna konekcija");
var_dump($konekcija);
}
catch(PDOException $e)
{
echo "greska sa konekcijom:" . $e-> getMessage();
}

?>
