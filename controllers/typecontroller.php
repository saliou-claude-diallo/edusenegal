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


     if(isset($_GET["idtype"])){
        if(supprimerUnType($_GET["idtype"])){
            header("location:?page=type");
        }
     }


     if(isset($_POST["modifier"])){
        extract($_POST);
       $t = recupereruntypeetablissement($_GET["id"]);

        if($_FILES["image"]["size"] > 0){

            $img = $_FILES["image"]["tmp_name"];
            $img_name = uniqid().".jpg"; 
            move_uploaded_file($img, "images/". $img_name);
        }else{
            $img_name = $t->image;
        }
        if(modifierUnType($_GET["id"], $nom, $icon, $img_name)){
            header("Location:?page=type");
        }
     }
     


    $types = recuperertouslestypesetablissements(); 

require_once("views/includes/entete.php");
if (isset($_GET["type"])) {
    if(isset($_GET["id"])){
        $t = recupereruntypeetablissement($_GET["id"]); 

    }
    require_once("views/ajoutTypeEtablissement.php");

}else{

    require_once("views/type.php");
} 
require_once("views/includes/pied.php");


