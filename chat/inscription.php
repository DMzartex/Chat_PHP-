<?php 

require_once 'db.php';
require_once 'requetes.php';


$erreur = "";

if(!empty($_POST['usersName']) && !empty($_POST['usersFirstName'])){
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE usersFirstName='$_POST[usersFirstName]'");// select du pseudo
    $stmt->execute(); // execution de la requête
    $user = $stmt->fetch();
    if ($user) { // verification si l'utilisateur existe ou pas 
        echo "l'utilisateur existe déja !";
    } else {
        ajoutUsers($_POST['usersName'], $_POST['usersFirstName']);
    } 

}else{
    $erreur = "Vous devez remplir tout les champs pour pouvoir vous inscrire !";
}

?>

<form action="inscription.php" method="post">
    <div>
        <label for="usersName">Nom :</label>
        <input type="text" name="usersName" id="usersName" placeholder="Votre nom :">
    </div>
    <div>
        <label for="usersFirstName">Prénom :</label>
        <input type="text" name="usersFirstName" id="usersFirstName" placeholder="Votre prénom :">
    </div>
    <div>
        <input type="submit" value="Inscription">
    </div>
</form>

<?php if(isset($erreur)): ?>
    <h4><?= $erreur ?> </h4>
<?php endif ?>