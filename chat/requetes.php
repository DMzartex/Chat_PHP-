<?php 


function returnUsers(string $table, $conn):array{
    $query = $conn->query("select * from {$table}");
    if(!$query){
        var_dump($conn->errorInfo());
        die('Error SQL');
    }
    $result = $query->fetchAll(PDO::FETCH_CLASS);

    return $result;
}