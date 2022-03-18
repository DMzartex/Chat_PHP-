<?php 

function estConnecte($connecte){
    if(!isset($connecte)){
        $_SESSION['connecte'];
        header('Location:connexion.php');
    }
}