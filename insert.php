<?php



require_once "views/head.php";
require_once "views/nav.php";


?>


<table class='tabela'>
<form action="php/obradaInsert.php" method="post"  enctype="multipart/form-data">> 

<tr> <th>  slika </th> <th> nesto </th> <th> bla bla </th>  <th> dugme </th>  </tr>
<tr> <td class='bord'> <input type='file'  name='file'/> </td> <td class='bord'> <input type='text' name='dodText' placeholder="ime slike"/> </td> <td class='bord'> <textarea rows="4" name='dodArea' cols="50" > text slike</textarea>
</td> <td class='bord'> <button name="saki" id="save">sacuvaj</button> </tr>
</form>
</table>