<?php
<<<<<<< HEAD
$dsn = 'mysql:dbname=tpphilippe;host=localhost';
$user = 'root';
$password = 'root';
=======
// $dsn = 'mysql:dbname=chatlt;host=localhost';
// $user = 'root';
// $password = '';
$dsn = 'mysql:dbname=dbs8004373;host=db5009437228.hosting-data.io';
$user = 'dbu2731491';
$password = 'f7dM5CE6r';

>>>>>>> 0970baafd34b8c1da792912f42c56cff798e6012
try {
    $bdd = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}

//connect avec le phpadmin
session_start();
//ouvrir une session global

?>