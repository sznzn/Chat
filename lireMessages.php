<?php  
    require_once("header.php");
    

    $sql = "SELECT * FROM mymessage ORDER BY time_message";
    $allmsg = $bdd->query($sql);   
    $html="";
    if($allmsg){
        // echo "on commence!";       
        foreach($allmsg as $chqmsg){
            $html.= "<p>".$chqmsg["nom"]." : ". $chqmsg["msg"]." : ".$chqmsg["time_message"]."</p>";    
        }
    }
    echo json_encode($html);

?>