<?php


include_once "header.php";

if(session_id()!= NULL){

    echo "Bienvenu chez le salon de chat!";
    echo "<br>";
    echo "votre id est: ".session_id();
    

}
//offre des based des données dans le mySql
//ouvrir un nouveau site chat.php
// on parle ici


$sql = "SELECT * FROM chat";
$requete = $bdd->prepare($sql);
$requete->execute();
$pseudos = $requete->fetchAll();

foreach($pseudos as $p){
    echo "<br><button>".$p["pseudo"]."</button>";
    echo "<a>Deconnexion</a>";
    
}