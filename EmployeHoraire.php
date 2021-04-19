<?php
require_once 'Employe.php';

class EmployeHoraire extends Employe
{

    private $nbrHeureDeBase;
    private $nbrHeureReel;
    private $salHoraire;
    private static float $taux = 10.0;


    public function __construct(string $nom, int $nbrHeureDeBase, int $nbrHeureReel, float $salHoraire)
    {
        parent::__construct($nom);
        $this->nbrHeureDeBase = $nbrHeureDeBase;
        $this->nbrHeureReel = $nbrHeureReel;
        $this->salHoraire = $salHoraire;

    }

    protected function getSalaire(): int
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