
<!doctype html>
<html lang="en">
	<head>
        <title>MyCompany - ZyPop Web Templates</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Main CSS --> 
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="css/moj.css">


        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
<div id="wrapis">
    <div id='cil'>
<form action="php/register.php"  onSubmit="return provera();" method="POST">
<h3>Registracija</h3>
<input type="hidden" name="hiddenStudentID" id="hiddenStudentID" value=""/> 
<div class="form-group">
<p>user name </p> <input type="text" id="tbIme" name="tbIme" placeholder="Ime">

<p>Password </p> <input type="text" id="pass" name="tbPass" placeholder="pasword">


</div> <br/>
<div class="form-group">

<input type="submit"  id="btnUnesi" name="btnUnesi" class="btn btn- primary pull-left" value="posalji"/>

 <?php if(isset($_SESSION['greska'])) 
 {
     echo "<h2> pogresan unos username ili passworda";
 }  ?> 
</div> </form>

</div>
<script src="js/validacija.js"></script>
</div>