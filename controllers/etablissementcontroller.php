<?php

// $etablissement = recuperertouslesinformations();


    if (isset($_POST["ajouter"])) {
        extract($_POST);

        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";

        if (ajoutEtablissement($nom, $lieu, $email, $tel, $description, $idtype, $img_name)) {
            move_uploaded_file($img, "images/".$img_name);
            return header("Location:?page=etablissement");
        }
    }


    //desormais

    if(isset($_POST["modifier"])){
        extract($_POST);
        if (modifierUnEtablissement($_GET["id"], $nom)) {
          header("location:?page=etablissement");
        }
    }
     if(isset($_GET["idetablissements"])){
        if(supprimerUnEtablissement($_GET["idetablissements"])){
            header("location:?page=etablissement");
        }
     }
    

    //desormais





$etablissements = recuperertouslesetablissements();

$types = recuperertouslestypesetablissements(); 

require_once("views/includes/entete.php");
if (isset($_GET["type"])) {
    require_once("views/ajoutEtablissement.php");

}else{

    require_once("views/etablissement.php");
} 
require_once("views/includes/pied.php");






