<?php

class Rapport{
    private $idRap;
    private $idMedRap;
    private $dateRap;
    private $motifRap;
    private $bilanRap; 
    private $idVisRap;

    public function __construct($idRap,$idMedRap,$dateRap,$motifRap,$bilanRap, $idVisRap){
        $this->idRap = (int)$idRap;
        $this->idMedRap = (int)$idMedRap;
        $this->dateRap = (string)$dateRap;
        $this->motifRap = (string)$motifRap;
        $this->bilanRap = (string)$bilanRap;
        $this->idVisRap = (int)$idVisRap;
    }

    public function addRapport($newRapport,$pdo){
        $sql = "INSERT INTO rapport (idMedecin,date, motif, bilan,idVisiteur) 
        VALUES ('$newRapport->idMedRap', '$newRapport->dateRap', '$newRapport->motifRap', 
                '$newRapport->bilanRap','$newRapport->idVisRap')";

        $pdo->query($sql);
    }
}
?>
