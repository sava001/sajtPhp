<?php
 session_start();

 include("php/functions.php");
// include("php/konekcija.php");
 if(isset($_SESSION['korisnik'])){
        if($_SESSION['korisnik']->ulogaId != 1){
          $_SESSION['greska'] ="Niste admin";
          header("Location: index.php");

        }
      }
        else{
          $_SESSION['greska'] ="Niste ulogovani!";
          header("Location: index.php");

        }
        var_dump($_SESSION); 
$kategorije = executeQuery("SELECT * from picture");
// $adm = $konekcija->query($upitAdmin);
// $postovi = $adm->fetchAll();


require_once "views/head.php";
  require_once "views/nav.php";

?>

<div id='neki'>

<table id='tabela'>

<tr> <th>  slika </th> <th> nesto </th> <th> bla bla </th>  <th> dugme </th>  </tr>
<?php
foreach($kategorije as $row) :
  echo ($row->id ."<br/>");
?>
<tr> <td class='prob'> <img src='images/<?php echo $row->img_dir ?>'class='slic' /> </td> 
<td class='prob'> <p class='tex'> <?php  echo $row->name ?>  </p></td>
 <td  class='prob'><?php echo $row->textSlika ?>
 </td><td class='prob'> <a href='#' data-id='<?php $row->id?>'
  class='dug'> obrisi </a> <input type='button'value='izmeni'class='dug'/> </td> </tr>;
<?php endforeach; ?>

<!-- <tr> <td  class='prob'> <input type='button'value='obrisi' id='dugmisa'/></td> </tr> -->
<!-- <tr> <td> ovdee </td> <td> ovdee2222 </td> <td> ovdee33333 </td> </tr>
<tr> <td> ovdee3232 </td> <td> ovdee2222 </td> <td> ovdee33333 </td> </tr>
<tr> <td> ovdee32323 </td> <td> ovdecwe2222 </td> <td> ovdee33333 </td> </tr>
<tr> <td> ovdee dewcw</td> <td> ovdee22cwcw22 </td> <td> ovdee33333 </td> </tr> -->
</table>
<div id='jen'>
<input type='button'value='obrisi' id='dugmisa'/>
</div>
</div>
<script src="js/main.js"></script>

