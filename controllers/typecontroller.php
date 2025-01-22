<?php 

    if (isset($_POST["ajouter"])) {
        extract($_POST);

        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";

        if (ajoutertypeetablissement($nom, $icon, $img_name)) {
            move_uploaded_file($img, "images/".$img_name);
            return header("Location:?page=type");
        }
    }


    $types = recuperertouslestypesetablissements(); 

require_once("views/includes/entete.php");
if (isset($_GET["type"])) {
    require_once("views/ajoutTypeEtablissement.php");

}else{

    require_once("views/type.php");
} 
require_once("views/includes/pied.php");


