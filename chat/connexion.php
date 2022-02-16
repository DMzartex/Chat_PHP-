<?php
session_start();
$erreur = "";
require_once 'db.php';

if(!empty($_POST['userFirstName'])){
    $userFirstName = $_POST['userFirstName'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE usersFirstName='$userFirstName'");// select du pseudo
    $stmt->execute(); // execution de la requête
    $user = $stmt->fetch();
    if ($user) { // verification si l'utilisateur existe ou pas 
        $_SESSION['existe'] = 1;
        echo 'existe';
    } else {
        echo 'existe pas';
        $erreur = "Le nom d'utilisateur n'existe pas créé vous un compte.";
    } 
}


?>

<form action="connexion.php" method="post">
    <input type="text" name="userFirstName" id="userFirstName">
    <input type="submit" value="Envoyer">
</form>

<?php if(!empty($erreur)): ?>

    <?= $erreur ?>
    <a href="inscription.php">Inscription</a>
    
<?php endif ?>