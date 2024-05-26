<?php

class Offrir{
    private $idRapOf;
    private $idMediOf;
    private $quantiteOf;
    public function __construct($idRapOf,$idMediOf,$quantiteOf){
        $this->idRapOf = (int)$idRapOf;
        $this->idMediOf = (int)$idMediOf;
        $this->quantiteOf = (int)$quantiteOf;
    }

    public function addOffrir($newOffrir,$pdo){
        $sql = "INSERT INTO offrir (idRapport,idMedicament, quantite) 
        VALUES ('$newOffrir->idRapOf', '$newOffrir->idMediOf', '$newOffrir->quantiteOf')";

        $pdo->query($sql);
    }
}

?>