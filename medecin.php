<?php

class Medecin{
    public $idMed;
    public $nomMed;
    public $prenomMed;
    public $adresseMed;
    public $cpMed;
    public $villeMed;
    public $telMed;
    public $speCompMed;
    public $departementMed;

    public function __construct($unId,$unNom,$unPrenom,$uneAdresse,$unCp,$uneVille,$unTel,$uneSpeComp,$unDepartement){
        $this->idMed=(int)$unId;
        $this->nomMed=(string)$unNom;
        $this->prenomMed=(string)$unPrenom;
        $this->adresseMed=(string)$uneAdresse;
        $this->cpMed=(string)$unCp;
        $this->villeMed=(string)$uneVille;
        $this->telMed=(string)$unTel;
        $this->speCompMed=(string)$uneSpeComp;
        $this->departementMed=(string)$unDepartement;
    }
    public function addMedecin($nouveauMedecin,$pdo){
        $sql = "INSERT INTO medecin (nom, prenom, adresse, tel, specialiteComplementaire, departement, cp, ville) 
        VALUES ('$nouveauMedecin->nomMed', '$nouveauMedecin->prenomMed', '$nouveauMedecin->adresseMed', 
                '$nouveauMedecin->telMed', '$nouveauMedecin->speCompMed', '$nouveauMedecin->departementMed', 
                '$nouveauMedecin->cpMed', '$nouveauMedecin->villeMeds')";

        $pdo->query($sql);
    }
}

?>