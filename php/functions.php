<?php
include ("konekcija.php");

function register($ime,$prezime,$password){
global $konekcija;
// $query= $konekcija->prepare("INSERT INTO korisnici VALUES(?,?,?)");
// $query->bindParam('sss',$ime,$prezime,md5($password));
// $query->execute();
// $query->close();
$sql = "INSERT INTO korisnici (ime, prezime, pasword) VALUES (?,?,?)";



$query = $konekcija->prepare($sql);
$query->bindParam('sss',$ime,$prezime,md5($password));

$query->execute();

}


?>








