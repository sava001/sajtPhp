<?php 
$serverBaze = "localhost";
$username = "root";
$password = "";
$bazaPodataka = "sajtPhp";
// $options = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];
try {
    $konekcija = new PDO("mysql:host=$serverBaze;  dbname=$bazaPodataka;charset=utf8", $username, $password);
    $konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 