<?php
include("logado.php");
if($_SESSION['admin'] == false){
    header('location: index.php');
}


?>