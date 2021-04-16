<?php
require_once 'Employe.php';

class Commercial extends Employe
{

    private $ca;
    private $salFixe;
    private static $taux;


    public function __construct(string $nom, int $ca, int $salFixe, float $taux = 10)
    {
        parent::__construct($nom);
        $this->ca = $ca;
        $this->salFixe = $salFixe;
        $this::$taux = $taux;

    }

    public function getSalaire()
    {
        $salaire = $this->salFixe + ($this->ca * $this::$taux/100);
        return $salaire;
    }

}