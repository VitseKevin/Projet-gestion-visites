<?php

require_once("../inc/init.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $cp = $_POST['cp'];
    $departement = $_POST['departement'];
    $tel = $_POST['tel'];
    $specialite = $_POST['specialite'];


$nouveauMedecin = new Medecin(null, $nom, $prenom, $adresse, $cp, $ville, $tel, $specialite, $departement);

$nouveauMedecin->addMedecin($nouveauMedecin,$pdo);

header("Location: ../vue/gestion_medecin.php");
    exit();
}
