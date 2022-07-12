<?php
// $dsn = 'mysql:dbname=chatlt;host=localhost';
// $user = 'root';
// $password = '';
$dsn = 'mysql:dbname=dbs8004373;host=db5009437228.hosting-data.io';
$user = 'dbu2731491';
$password = 'f7dM5CE6r';

try {
    $bdd = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}

//connect avec le phpadmin
session_start();
//ouvrir une session global

?>