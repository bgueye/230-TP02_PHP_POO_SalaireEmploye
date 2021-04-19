<?php

require_once 'Employe.php';

class Commercial extends Employe
{

    private $ca;
    private $salFixe;
    private static float $taux = 10.0;


    public function __construct(string $nom, int $ca, int $salFixe)
    {
        parent::__construct($nom);
        $this->ca = $ca;
        $this->salFixe = $salFixe;

    }

    protected function getSalaire()
    {
        $salaire = $this->salFixe + ($this->ca * $this::$taux/100);
        return $salaire;
    }

}