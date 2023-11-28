<?php
class Visiteur {
    private $idVis;
    private $nomVis;
    private $prenomVis;
    private $loginVis;
    private $mdpVis;
    private $adresseVis;
    private $cpVis;
    private $villeVis;
    private $dateEmbaucheVis;

    public function __construct($idVis, $nomVis, $prenomVis, $loginVis, $mdpVis, $adresseVis, $cpVis, $villeVis, $dateEmbaucheVis) {
        $this->idVis = (int) $idVis;
        $this->nomVis = (string) $nomVis;
        $this->prenomVis = (string) $prenomVis;
        $this->loginVis = (string) $loginVis;
        $this->mdpVis = (string) $mdpVis;
        $this->adresseVis = (string) $adresseVis;
        $this->cpVis = (int) $cpVis;
        $this->villeVis = (string) $villeVis;
        $this->dateEmbaucheVis = (string) $dateEmbaucheVis;
    }

// Getters
public function getIdVis() {
    return $this->idVis;
}

public function getNomVis() {
    return $this->nomVis;
}

public function getPrenomVis() {
    return $this->prenomVis;
}

public function getLoginVis() {
    return $this->loginVis;
}

public function getMdpVis() {
    return $this->mdpVis;
}

public function getAdresseVis() {
    return $this->adresseVis;
}

public function getCpVis() {
    return $this->cpVis;
}

public function getVilleVis() {
    return $this->villeVis;
}

public function getDateEmbaucheVis() {
    return $this->dateEmbaucheVis;
}

// Setters
public function setIdVis($idVis) {
    $this->idVis = (int) $idVis;
}

public function setNomVis($nomVis) {
    $this->nomVis = (string) $nomVis;
}

public function setPrenomVis($prenomVis) {
    $this->prenomVis = (string) $prenomVis;
}

public function setLoginVis($loginVis) {
    $this->loginVis = (string) $loginVis;
}

public function setMdpVis($mdpVis) {
    $this->mdpVis = (string) $mdpVis;
}

public function setAdresseVis($adresseVis) {
    $this->adresseVis = (string) $adresseVis;
}

public function setCpVis($cpVis) {
    $this->cpVis = (int) $cpVis;
}

public function setVilleVis($villeVis) {
    $this->villeVis = (string) $villeVis;
}

public function setDateEmbaucheVis($dateEmbaucheVis) {
    $this->dateEmbaucheVis = (string) $dateEmbaucheVis;
}
    public function addvisiteur($pdo,$nouveauVisiteur) {
        // Utiliser des requêtes préparées pour éviter les attaques par injection SQL
        $sql = "INSERT INTO visiteur(id,nom, prenom, login, mdp, adresse, cp, ville, dateEmbauche) 
        VALUES (0,'$nouveauVisiteur->nomVis', '$nouveauVisiteur->prenomVis','$nouveauVisiteur->loginVis',
         '$nouveauVisiteur->mdpVis', '$nouveauVisiteur->adresseVis', '$nouveauVisiteur->cpVis',
          '$nouveauVisiteur->villeVis', '$nouveauVisiteur->dateEmbaucheVis')";
        $pdo->query($sql);
    }

        
}
   
// Exemple d'utilisation

