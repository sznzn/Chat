<?php
$dsn = 'mysql:dbname=chatlt;host=localhost';
$user = 'root';
$password = '';
try {
    $bdd = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}

//connect avec le phpadmin
session_start();
//ouvrir une session global

?>