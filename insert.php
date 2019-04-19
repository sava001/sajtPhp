<?php



require_once "views/head.php";
require_once "views/nav.php";


?>

<div id='neki1'>
<div id='tab1'>
<table class='tabela'>
<form action="php/obradaInsert.php" method="post"  enctype="multipart/form-data">

<tr> <th class='zvon'>  slika biljke </th> <th class='zvon'> ime biljke </th> <th class='zvon'> text o biljci </th>  <th class='zvon'> dugme </th>  </tr>
<tr> <td class='bord'> <input type='file'  name='file'/> </td> <td class='bord'> <input type='text' name='dodText' placeholder="ime slike"/> </td> <td class='bord'> <textarea rows="4" name='dodArea' cols="50" > text slike</textarea>
</td> <td class='bord'> <button name="saki" id="save">sačuvaj</button> </tr>
</form>
</table>

</div>
</div>



