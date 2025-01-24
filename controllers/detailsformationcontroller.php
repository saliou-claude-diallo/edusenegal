<?php 

if (isset($_GET["id"])) {
    $ecole = recupereruneformation($_GET["id"]);

}else{
    header("Location:?page=home");
}

require_once("views/includes/entete.php");

    require_once("views/detailsformation.php");
require_once("views/includes/pied.php");