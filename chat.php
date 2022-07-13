<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        button{
            width: 150px;
        }
    </style>
    <title>Page chat</title>
</head>

<body class="container">
    <header>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item border border-primary">
                <button class="nav-link" aria-current="pseudo" name="personne" ><?php echo "Bienvenu! ".$_SESSION["pseudo"]; ?></button>
            </li>
            <li class="nav-item border border-warning">
                <a class="nav-link" href="chat.php?action=deconnexion&id=<?=$_SESSION['id'];?>">deconnexion</a>
            </li>
        </ul>
    </header>


    <main class="container" >
        <div class="row">
            <div class="col-4 bg-warning">
<?php

if(session_id()!= NULL){
//需要修改的 1get为什么未definie
//因为没有isset 有了它就会识别
    if ( isset($_GET['action'])&&$_GET['action']=="deconnexion") {
        // ... code déconnexion...
        $sql = "DELETE FROM chat WHERE id = ".$_SESSION['id'];
        $requete = $bdd->prepare($sql);
        $requete->execute();
        //需要修改的
        header("Location:deconnexion.php");
    }
    
    
    echo "Liste de l'entrée";
    echo "<br>";
    
    
    
    //offre des based des données dans le mySql
    //ouvrir un nouveau site chat.php
    // on parle ici
    
    
    $sql = "SELECT * FROM chat";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $pseudos = $requete->fetchAll();
    
    foreach($pseudos as $p){
        echo "<br><button class='btn btn-secondary mb-1'>".$p["pseudo"]."</button>";
        
    }
}
        
?>
        </div>
            <div class="col-8 bg-secondary">
                l'écran pour se parler
                <div id="messages" class="w-100 h-75 bg-light mb-3 overflow-auto">
                    <?php
                        // $sql = "SELECT * FROM mymessage";
                        // $allmsg = $bdd->query($sql);   
                        // if($allmsg){
                        //     echo "on commence!";       
                        //     foreach($allmsg as $chqmsg){
                        //         echo "<p>".$chqmsg["nom"]." : ". $chqmsg["msg"]." : ".$chqmsg["time_message"]."</p> ";    
                        //     }
                        // }
                    ?>
                </div>
                
                    <div class="w-100 h-10 row justify-content-around">
                    
                        <input id="sentMsg" class="col-8  bg-light" type="text" name="sentMsg" placeholder="parler ici">
                    
                        <button class="col-2 btn btn-warning" name="envoyer" id="envoyer">
                        envoyer
                        </button>
                    </div>
                
            </div>
        </div>
    </main>
    <script>
        
        
        document.querySelector("#envoyer").addEventListener("click", function(){
            const dialogue = document.querySelector("#sentMsg").value;
            if(dialogue.length == 0){
                
                alert("vous n'avez rien écrit");
            }
            const formData = new FormData();
            formData.append("sentMsg", dialogue);

            const option = {
                method: "POST",
                body: formData,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            };
            fetch("lireMessages.php", option)
                .then(response => response.text()
                )
                .then(data =>{
                console.log(data)
                });
        });
        
    
        // Peut être OK pour faire scroller la boîte de dialogue
        // document.querySelector("#messages").scrollTop = document.querySelector("#messages").scrollHeight;

        // setInterval(function() {
        //     fetch('lireMessages.php')
        //     .then(function(response) {
        //         return response.json();
        //     })
        //     .then(function(data) {
        //         document.querySelector("#messages").innerHTML = data;
        //     });

            
            
            // document.querySelector("#messages").innerHTML = new Date();

        //}, 1000)

    </script>
</body>
</html>
<?php

?>




