<?php

class Famille{
    private $idFamille;
    private $libelleFamille;
    public function __construct($idFamille, $libelleFamille){
        $this->idFamille = (int)$idFamille;
        $this->libelleFamille = (string)$libelleFamille;
    }

    public function addFamille($nouvelleFamille,$pdo){
  
        $sql = "INSERT INTO famille (id, libelle) 
        VALUES (0,'$nouvelleFamille->libelle')";

        $pdo->query($sql);
    }

 }


?>