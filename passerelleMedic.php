<?php
require_once("../inc/init.inc.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = ($_POST["nom"]);
    $composition = ($_POST["composition"]);
    $famille = ($_POST["famille"]);
    $effets = ($_POST["effets"]);
    $contreindic = ($_POST["contreindic"]);
    
    
  