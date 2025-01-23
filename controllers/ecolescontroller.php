<?php 

if (isset($_GET["idtype"])) {
    $ecoles = recupererEtablissementParIdType($_GET["idtype"]);
}else{
    header("Location:?page=home");
}

require_once("views/includes/entete.php");

    require_once("views/ecoles.php");
require_once("views/includes/pied.php");