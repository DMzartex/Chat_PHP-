<?php 
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "chat";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,[

    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    
]);

