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

    public function addRapport($newRapport, $pdo){
        $idMedecin = $newRapport->idMedRap;
        $date = $newRapport->dateRap;
        $motif = $newRapport->motifRap;
        $bilan = $newRapport->bilanRap;
        $idVisiteur = $newRapport->idVisRap;

        $sql = "INSERT INTO rapport (idMedecin, date, motif, bilan, idVisiteur) 
                VALUES (:idMedecin, :date, :motif, :bilan, :idVisiteur)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':idMedecin', $idMedecin);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':motif', $motif);
        $stmt->bindParam(':bilan', $bilan);
        $stmt->bindParam(':idVisiteur', $idVisiteur);

        $result = $stmt->execute();

        if ($result === false) {
            die('Erreur lors de l\'exécution de la requête : ' . $stmt->errorInfo()[2]);
        }
    }
}
?>
