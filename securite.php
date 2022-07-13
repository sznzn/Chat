<?php
    if(!isset($_SESSION["user"])) {
        header("Location:inscription.php");
    }
?>