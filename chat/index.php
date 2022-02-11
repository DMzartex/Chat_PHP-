<?php 
require_once 'db.php';
require_once 'requetes.php';

$result = returnUsers("users",$conn);


?>



<?php foreach($result as $users): ?>
    <?= var_dump($users) ?>
        <li><?= $users->userName ?></li>
<?php endforeach; ?>