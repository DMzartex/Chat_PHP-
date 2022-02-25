<?php 
require_once 'db.php';
require_once 'requetes.php';

$result = returnUsers("users");


?>


<h1>Liste des utilisateurs</h1>
<?php foreach($result as $users): ?>
        <table>
            <tr>
                <td><?= $users->usersName?></td>
                <td><?= $users->usersFirstName?></td>
            </tr>
        </table>
<?php endforeach; ?>