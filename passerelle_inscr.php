<?php

require_once("../inc/init.inc.php");
require_once("../classe/visiteur.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = ($_POST["nom"]);
    $prenom = ($_POST["prenom"]);
    $login = ($_POST["login"]);
    $mdp = ($_POST["mdp"]);
    $adresse = ($_POST["adresse"]);
    $cp = ($_POST["cp"]);
    $ville = ($_POST["ville"]);
    $dateEmbauche = ((string)$_POST["date_embauche"]);

    // Créer un nouvel objet Visiteur
    $nouveauVisiteur = new Visiteur(null, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche);

    $nouveauVisiteur->addvisiteur($pdo,$nouveauVisiteur);
    
    // Rediriger après l'insertion des données
    header("Location: ../Vue/acceuil.php");
    exit();
} else {
    // Gérer le cas où la méthode HTTP n'est pas POST
    echo "La méthode HTTP doit être POST.";
}
?>