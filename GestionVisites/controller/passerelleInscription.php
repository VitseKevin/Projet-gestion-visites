<?php

require_once("../inc/init.inc.php");
require_once("../model/visiteur.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nom = ($_POST["nom"]);
    $prenom = ($_POST["prenom"]);
    $login = ($_POST["login"]);
    $mdp = ($_POST["mdp"]);
    $adresse = ($_POST["adresse"]);
    $cp = ($_POST["cp"]);
    $ville = ($_POST["ville"]);
    $dateEmbauche = ((string)$_POST["date_embauche"]);
  
    $nouveauVisiteur = new Visiteur(null, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche);

    $nouveauVisiteur->addvisiteur($pdo,$nouveauVisiteur);
    
    header("Location: ../vue/connexion.php");
    exit();
} else {

    echo "La méthode HTTP doit être POST.";
}
?>
