<?php
session_start();
include("konekcija.php");

function register($userName,$password,$ulogaId)
{
    global $konekcija;
    $upit = "SELECT * FROM korisnici WHERE userName= ?";
   
    $priprema = $konekcija->prepare($upit);
    $rezultat = $priprema->execute([$userName]); 

   var_dump($priprema->rowCount());
    if($rezultat)
    {
        if($priprema->rowCount()==0)
        {
            var_dump($password);
            $stmt = $konekcija->prepare('INSERT INTO korisnici (userName, password,ulogaId) VALUES (?,?,?)');
            $stmt->execute([$userName,md5($password),$ulogaId]);
        }
        else{
            echo("user name je zauzet");
        }
    }

//    die();
    // $stmt = $konekcija->prepare('INSERT INTO korisnici (userName, password,ulogaId) VALUES (?,?,?)');
    // $stmt->execute([$userName,md5($password),$ulogaId]);
    // $stmt->fetch();
// die();

    echo("uspesno ste se registrovali");
    header("Location: ../login.php");
    // }
    // if($_SESSION["korisnik"]->ulogaId==1)
    // {
    //     header("Location: ../admin.php");
    // }
    // else{
    //     header("Location: ../index.php");
    // 

}

function login($imeI,$passI)
{
    
    global $konekcija;
var_dump($passI);
    $upit = "SELECT * FROM korisnici WHERE userName= ? AND password = ?";
   
    $priprema = $konekcija->prepare($upit);
    $rezultat = $priprema->execute([$imeI,md5($passI)]); 
    
    // var_dump( $priprema->fetch());

   
     
   var_dump($rezultat);
  
    // $priprema->bindParam(':imeI', $imeI);
    // $priprema->bindParam(':passI',md5($passI));

//    $rezultat = $priprema->execute([$imeI,md5($passI]));

    // $rezultat = $priprema->execute([$imeI,$passI);
    // die();
    // $rezultat = $priprema->execute([$imeI,$passI]);
   
   
    if($rezultat)
    {
        if($priprema->rowCount()==1){

            
            var_dump($priprema->rowCount());
            
            $korisnik = $priprema->fetch();
           
            var_dump($korisnik->ulogaId);
            
            
          


            $_SESSION['korisnik'] = $korisnik;
            if($_SESSION['korisnik']->ulogaId == 1){
                
                header("Location: ../admin.php");


            }
            else{
                
                header("Location: ../index.php");
            }

        }
        else if($priprema->rowCount()==0)
        {
            echo "<h2>niste registrovani </h2>";
            var_dump($priprema);
             header("Location: ../register.php");

        }

    }
    else{
        echo "nesto nije u redu sa upitom";
    }

}




function executeQuery($upit)
{
    global $konekcija;
    return $konekcija->query($upit)->fetchAll();
}
function deleteCategor($id)
{
    global $konekcija;
    $rezultat = $konekcija->prepare("DELETE FROM picture WHERE id = :id");
    $rezultat->bindParam(":id", $id);
    $rezultat->execute();
}

function updateCategori($id,$slika,$nesto,$bla)
{
    var_dump($id);
    global $konekcija;
    $priprema = $konekcija->prepare("UPDATE picture
    SET ime = ?,img_dir = ?,textSlika = ?
     WHERE id = ?");
       $priprema->execute([$nesto,$slika,$bla,$id]);
    
}

function getCategoryById($id)
{

    global $konekcija;
    $priprema = $konekcija->prepare("SELECT * FROM picture
    WHERE id=?");
    $priprema->execute([$id]);
   return $priprema->fetch();
    

}
function insertCategory($nesto,$slikaName,$bla)
{
    global $konekcija;
    $stmt = $konekcija->prepare('INSERT INTO picture (ime, img_dir,textSlika) VALUES (?,?,?)');
    $stmt->execute([$nesto,$slikaName,$bla]);

}