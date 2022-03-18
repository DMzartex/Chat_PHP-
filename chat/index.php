<?php 
session_start();
require_once 'db.php';
require_once 'requetes.php';
require_once 'functions/functions.php';

estConnecte($_SESSION['connecte']);

$result = returnUsers("users");

var_dump($_SESSION['connecte']);


?>

<a href="deconnexion.php">Deconnexion</a>

<h1>Bienvenu <?= $_SESSION['user'] ?><h1>
<h1>Liste des utilisateurs</h1>
<?php foreach($result as $users): ?>
        <table>
            <tr>
                <td><a href="#"><?= $users->userName?></a></td>
                <td><a href="#"><?= $users->userFirstName?></a></td>
            </tr>
        </table>
<?php endforeach; ?>

