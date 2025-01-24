<?php 

if (isset($_GET["id"])) {
    $ecole = recupererunetablissement($_GET["id"]);
    $formations = recupererdesformationsparecole($_GET["id"]);

}else{
    header("Location:?page=home");
}

require_once("views/includes/entete.php");

    require_once("views/centres.php");
require_once("views/includes/pied.php");