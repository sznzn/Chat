<?php


include_once "header.php";


//si on clique bouton pour submit des données
if(isset($_POST["inscription"])&&(!empty($_POST["pseudo"]))){
    $pseudo=$_POST["pseudo"];
    $ville=$_POST["ville"];
    $age=$_POST["age"];
    $sex=$_POST["sex"];

    $sql = "INSERT INTO chat(pseudo, ville, age, sex) VALUES(?,?,?,?)";
    $requete = $bdd->prepare($sql);
    $onparle = $requete->execute(array($pseudo, $ville, $age, $sex));
    if($onparle){
        //需要修改的 怎么显示$id 
        $sql="SELECT MAX(id) FROM chat";
        var_dump($sql);
        echo "fonctionne!";
        //$id = $bdd->query($sql);
        $requete = $bdd->prepare($sql);
        $requete->execute();
        $newone = $requete->fetch();
        $_SESSION["id"] = $newone["id"];
        $_SESSION["pseudo"] = $pseudo;
        echo $_SESSION["id"] ;
        //header("Location: chat.php");
        //需要修改的
    }else{
        echo "erreur que l'on ne connaît pas";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>TP Chat</title>
</head>

<body>
    <main class="container">
        <h1 class="text-center mt-3 shadow-lg p-3 mb-5 bg-body rounded">Chat chat chat! Comme here!</h1>
        <div class="w-50 mx-auto">
            <form method="POST" action="inscription.php">
                <div class="mb-3">
                    <label for="pseudo" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo" name="pseudo">

                </div>
                <div class="mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">age</label>
                    <input type="text" class="form-control" id="age" name="age">
                </div>

                <div class="row">
                    <div class="form-check col-6">
                        <input class="form-check-input" type="radio" name="sex" id="sexfemme" value="1">
                        <label class="form-check-label" for="sexfemme">
                            Femme
                        </label>
                    </div>
                    <div class="form-check mb-3 col-6">
                        <input class="form-check-input" type="radio" name="sex" id="sexhomme" value="0">
                        <label class="form-check-label" for="sexhomme">
                            Homme
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3" name="inscription">Submit</button>
            </form>
        </div>
    </main>
</body>

</html>

