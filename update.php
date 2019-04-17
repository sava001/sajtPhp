
<?php
 include("php/functions.php");

 require_once "views/head.php";
 require_once "views/nav.php";

if(isset($_GET['submit'])){
    $id = $_GET['submit'];
    var_dump($id);
   
  $picture =getCategoryById($id);

}


?>

<div id='neki'>


<table class='tabela'>
<form action="php/updateObrada.php" method="post"> 

<tr> <th>  slika </th> <th> nesto </th> <th> bla bla </th>  <th> dugme </th>  </tr>
<tr> <td class='bord'> <input type='text' placeholder='slikca' name='slik' value="<?php echo $picture->img_dir ?>"/> </td> <td class='bord'> <input type='text'placeholder='nesto' name='texta' value="<?php echo $picture->ime?>"/> </td> <td class='bord'> <textarea rows="4" name='area' cols="50" > <?php echo $picture->textSlika?></textarea>
</td> <td class='bord'> <button name="save" id="save" value="<?php echo $id ?>">sacuvaj</button> </tr>
</form>
</table>
     
