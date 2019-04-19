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


<div id='wrap2'>
    <div id='jok'>
<form action="php/loginProv.php" onSubmit="return provera3();" method="POST">
<h3>Logovanje</h3>

<div class="form-group">
<p>Ime: </p> <input type="text" id="ime" name="imen" placeholder="ime">

<p>Password: </p> <input type="text" id="pasword" name="paswor" placeholder="password">


</div> <br/>
<div class="form-group">
<input type="submit" id="btnUnesi" name="stisni" class="btn btn- primary pull-left" value="posalji"/>

<?php if(isset($_SESSION['greska'])) 
 {
     echo "<h2> pogresan unos username ili passworda";
 }  ?> 
</div> </form>
<a href='index.php'id='kec1'> vrati me na index  ->></a>
</div>
<script src="js/validacija2.js"></script>
</div>