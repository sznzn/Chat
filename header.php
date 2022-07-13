<?php
$dsn = 'mysql:dbname=tpphilippe;host=localhost';
$user = 'root';
$password = 'root';
try {
    $bdd = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}

//connect avec le phpadmin
session_start();
//ouvrir une session global

?>