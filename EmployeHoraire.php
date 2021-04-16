<?php
require_once 'Employe.php';

class EmployeHoraire extends Employe
{

    private $nbrHeureDeBase;
    private $nbrHeureReel;
    private $salHoraire;
    private static $taux;


    public function __construct(string $nom, int $nbrHeureDeBase, int $nbrHeureReel, float $salHoraire, float $taux = 10)
    {
        parent::__construct($nom);
        $this->nbrHeureDeBase = $nbrHeureDeBase;
        $this->nbrHeureReel = $nbrHeureReel;
        $this->salHoraire = $salHoraire;
        $this::$taux = $taux;

    }

    public function getSalaire(): int
    {
        if($this->nbrHeureReel > $this->nbrHeureDeBase){
            $heureSup = $this->nbrHeureReel - $this->nbrHeureDeBase;
        }
        else{
            $heureSup = 0;
        }
        
        $salaire = $this->salHoraire * $this->nbrHeureDeBase + ($this->salHoraire + $this->salHoraire * $this::$taux/100)*$heureSup;
        return $salaire;
    }

}