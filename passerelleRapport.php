<?php
require_once("../inc/init.inc.php");
require_once("../model/rapport.php");
require_once("../model/offrir.php");

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $medecinvisite = $_POST['medecin'];
    $date = $_POST['date'];
    $motif = $_POST['motif'];
    $bilan = $_POST['bilan'];
    $medicament = $_POST['medicament'];
    $quantite = $_POST['quantite'];
    $idRapport = $pdo->query('SELECT MAX(id) as idMax FROM rapport');
    $idRapport = $idRapport->fetch();
    $idRapport = $idRapport['idMax'];

    $newRapport = new Rapport(null,$medecinvisite,$date, $motif,$bilan);
    $newRapport->addRapport($newRapport,$pdo);

    $newOffrir = new Offrir($idRapport,$medicament,$quantite);
    $newOffrir->addOffrir($newOffrir,$pdo);


}


?>
