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

}
?>