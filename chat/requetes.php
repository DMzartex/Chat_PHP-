<?php 


function returnUsers(string $table, $conn):array{
    $query = $conn->query("select * from {$table}");
    $result = $query->fetchAll();

    return $result;
}

function ajoutUsers($conn,string $usersName, string $usersFirstName){
    $sql = "INSERT INTO users (usersName, usersFirstName) VALUES('$usersName', '$usersFirstName')";
    $result = $conn->prepare($sql);
    $result->execute();
}