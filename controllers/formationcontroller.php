<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    $img = $_FILES["image"]["tmp_name"];
    $img_name = uniqid().".jpg";

    if (ajoutFormation($nom, $lieu, $montant, $mensualite, $duree, $description, $img_name, $idtype)) {
        move_uploaded_file($img, "images/".$img_name);
        return header("Location:?page=formation");
    }
}


  $formation = recupererTousFormations();

  $ecoles = recuperertouslesetablissements(); 

// desormais

require_once("views/includes/entete.php");
if (isset($_GET["type"])) {
    require_once("views/ajoutFormation.php");

}else{

    require_once("views/formation.php");
} 
require_once("views/includes/pied.php");