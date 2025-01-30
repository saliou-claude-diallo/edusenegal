<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    $img = $_FILES["image"]["tmp_name"];
    $img_name = uniqid().".jpg";

    if (ajoutFormation($nom, $montant, $mensualite, $duree, $description, $img_name, $id_etablissement)) {
        move_uploaded_file($img, "images/".$img_name);
        return header("Location:?page=formation");
    }
}


  $formation = recupererTousFormations();

  $ecoles = recuperertouslesetablissements(); 

// desormais mcode
if(isset($_GET["idformations"])){
    if(supprimerUneFormation($_GET["idformations"])){
        header("location:?page=formation");
    }
 }


 //desormais
 if(isset($_POST["editformation"])){
    extract($_POST);
    $p = recupererUneFormation($_GET["id"]);
    if($_FILES["image"]["SIZE"] > 0){
        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";
        move_uploaded_file($img, "img/".$img_name);
    }else {
        $img_name = $p->image;
    }
    if (modifierUneFormation($_GET["id"], ucfirst($nom), $montant, $mensualite, $duree, $description, $img_name, $id_etablissement)) {
      header("location:?page=formation");
    }

 }



//  if(isset($_POST["modifier"])){
//     extract($_POST);
//     if (modifierUneFormations($_GET["id"], $nom, $montant, $mensualite, $duree, $image, $description)) {
//       header("location:?page=formation");
//     }
// }
 if(isset($_GET["idformation"])){
    if(supprimerUneFormations($_GET["idformation"])){
        header("location:?page=formation");
    }
 }
 //desormais

//  cette partie est la partie modifierformaton

if(isset($_POST["editer"])){
    extract($_POST);
   $t = recupererTousFormations($_GET["id_etablisement"]);

    if($_FILES["image"]["size"] > 0){

        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg"; 
        move_uploaded_file($img, "images/". $img_name);
    }else{
        $img_name = $t->image;
    }
    if(modifierUneFormation($_GET["id_etablissement"], $nom, $montant, $mensualite, $duree, $description,  $image)){
        header("Location:?page=formation");
    }
 }


//  cette partie est la fin de la partie modifier



require_once("views/includes/entete.php");
if (isset($_GET["type"])) {
    require_once("views/ajoutFormation.php");

}else{

    require_once("views/formation.php");
} 
require_once("views/includes/pied.php");