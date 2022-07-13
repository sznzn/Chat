<?php
    require_once("header.php");
  
    if(isset($_POST["sentMsg"])){

        $nom = $_SESSION["user"]["pseudo"];
        $msg = $_POST["sentMsg"];
        $sql = "INSERT INTO mymessage(nom, msg, time_message) VALUES(?, ?, NOW())";

        try {         
            $requete = $bdd->prepare($sql);
            $requete->execute(array($nom, $msg));
            echo ("message enregistré");
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }


?>