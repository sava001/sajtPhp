<?php

// header("Content-type: application/json");

// if(isset($_GET['id'])){
    include("functions.php");

    $id = $_POST['id'];
var_dump ($id);
    deleteCategor($id);
    
// }

?>
