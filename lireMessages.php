<?php
    require_once("header.php");
    
    if(isset($_POST["sentMsg"])){
        echo "Liste de l'entrée";
        $sentMsg = $_POST["sentMsg"];
        $nom = $_SESSION["pseudo"];
        $msg = $_POST["sentMsg"];
        $sql = "INSERT INTO mymessage(nom, msg, time_message) VALUES(?, ?, NOW())";
        var_dump($_POST);
        try
        {
            
            
            $requete = $bdd->prepare($sql);
            $ok=$requete->execute(array($nom, $msg));
        
        }catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    

    
    

    

    // $sql = "SELECT * FROM mymessage";
    // $allmsg = $bdd->query($sql);   
    // $html="";
    // if($allmsg){
    //     // echo "on commence!";       
    //     foreach($allmsg as $chqmsg){
    //         $html.= "<p>".$chqmsg["nom"]." : ". $chqmsg["msg"]." : ".$chqmsg["time_message"]."</p> ";    
    //     }
    // }
    // echo json_encode($html);
?>