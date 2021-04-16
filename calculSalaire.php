<?php
include 'Employe.php';
include 'EmployeHoraire.php';
include 'Commercial.php';

$employeHoraire1 = new EmployeHoraire('Georges', 150, 150, 13, 10);
$employeHoraire2 = new EmployeHoraire('Dupond', 140, 180, 10, 10);
echo "Employés horaire\n";

//var_dump($employeHoraire1);
echo($employeHoraire1->afficheSalaire());
echo "\n";
//var_dump($employeHoraire2);
echo($employeHoraire2->afficheSalaire());
echo "\n";

$comercial1 = new Commercial('Benoit', 4000, 2000, 10);
$comercial2 = new Commercial('Bertrand', 1900, 1000, 10);

//var_dump($comercial1);
echo "\nEmployés commerciaux\n";
echo($comercial1->afficheSalaire());
echo "\n";
echo($comercial2->afficheSalaire());
