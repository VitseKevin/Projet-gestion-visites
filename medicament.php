<?php

class Medicament{
    private $idMedi;
    private $nomComMedi;
    private $idFamilleMedi;
    private $compoMedi;
    private $effetsMedi;
    private $contreIndicMedi;

    public function __construct($idMedi,$nomComMedi,$idFamilleMedi,$compoMedi,$effetsMedi,$contreIndicMedi){
        $this->idMedi=(int)$idMedi;
        $this->nomComMedi=(string)$nomComMedi;
        $this->idFamilleMedi=(string)$idFamilleMedi;
        $this->compoMedi=(string)$compoMedi;
        $this->effetsMedi=(string)$effetsMedi;
        $this->contreIndicMedi=(string)$contreIndicMedi;
    }

    public function addMedicament($nouveauMedicament,$pdo){
        $sql = "INSERT INTO medicament (id,nomCommercial, composition, effets, contreindications) 
        VALUES (0,'$nouveauMedecin->nomComMedi', '$nouveauMedecin->compoMedi', '$nouveauMedecin->effetsMedi', 
                '$nouveauMedecin->contreIndicMedi')";

        $pdo->query($sql);

}

?>