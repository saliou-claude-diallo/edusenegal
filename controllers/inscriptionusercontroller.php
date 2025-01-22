<?php 

require_once("views/includes/entete.php"); 
require_once("views/inscriptionuser.php");
require_once("views/includes/pied.php");






if(isset($_POST["inscrire"])){
    extract($_POST);
    if (ajouteretablissement($nom, $adresse, $email, $telephone, $categorie)) {
        // header("location:?page=register");
    }
}
