<?php
$dsn = 'mysql:dbname=tpphilippe;host=localhost';
$user = 'root';
$password = 'root';
$bdd = new PDO($dsn, $user, $password);
//connect avec le phpadmin
session_start();
//ouvrir une session global

?>