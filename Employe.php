<?php

abstract class Employe
{
    protected $nom;
    protected $matricule;
    private static $dernierMatricule = 0;


    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->matricule = $this::$dernierMatricule + 1;
        $this::$dernierMatricule = $this->matricule;
        
    }

    abstract protected function getSalaire();

    private function infosPerso() : string
    {
        $info = "\nMatricule employé: ".$this->matricule;
        $info .= "\nNom employé: ".$this->nom;
        return $info;
    }

    public function afficheSalaire(): string
    {
        $info = $this->infosPerso()."\nSallaire du mois: ".$this->getSalaire();
        return $info;
    }
}
