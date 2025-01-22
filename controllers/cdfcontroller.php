<?php

require_once ("views/includes/entete.php"); 




$etablissement = recuperertouslesetablissements();
// print_r($etablissement);
if (isset($_GET["page"])) {
     require_once("views/cdf.php");

}else {
    require_once("views/cdf.php");
}
