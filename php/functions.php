<?php
include("konekcija.php");

function register($ime, $prezime, $password)
{
    global $konekcija;
    $stmt = $konekcija->prepare('INSERT INTO korisnici (ime, prezime, password) VALUES (?,?,?)');
    $stmt->execute([$ime,$prezime,md5($password)]);
    $stmt->fetch();
}


 