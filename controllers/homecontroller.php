<?php

$etablissements = recuperertouslesetablissements();
$formations = recupererTousFormations();
$types = recuperertouslestypesetablissements();

require_once("views/includes/entete.php"); 

require_once("views/home.php");
require_once("views/includes/pied.php");
