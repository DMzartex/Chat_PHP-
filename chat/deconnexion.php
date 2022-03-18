<?php 
session_start();
$_SESSION['connecte'] = null; //destroy the session
header("location:index.php"); //to redirect back to "index.php" after logging out
exit();