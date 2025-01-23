<?php 

    if (isset($_POST["ajouter"])) {
        extract($_POST);

        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";

        if (ajouterTypeFormation($nom, $icon, $img_name)) {
            move_uploaded_file($img, "images/".$img_name);
            return header("Location:?page=typeFormation");
        }
    }

    $formation = recupererTousFormations();
     $type = recupererTousFormations(); 

require_once("views/includes/entete.php");
if (isset($_GET["type"])) {
    require_once("views/ajoutTypeFormation.php");

}else{

    require_once("views/typeFormation.php");
} 
require_once("views/includes/pied.php");


