<?php 


function returnUsers(string $table):array{
    global $conn;
    $query = $conn->query("select * from {$table}");
    $result = $query->fetchAll();

    return $result;
}

function ajoutUsers(string $usersName, string $usersFirstName){
    global $conn;
    $ajout = $conn->prepare("INSERT INTO users (usersName, usersFirstName) VALUES(:usersName, :usersFirstName)");
    $ajout->execute([
        'usersName'=> $usersName,
        'usersFirstName' => $usersFirstName
    ]);
    
}