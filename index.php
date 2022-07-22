<?php

// Fonction permettant le chargement automatique des classes
require_once './classes/Utilisateur.class.php';
spl_autoload_register(function ($className){
require_once './classes/' . $className . '.php';
});


$voiture1 = new Voiture();
$voiture1->setMarque('BMW');
$voiture1->setVitesse(50);
$voiture1->setMasse(1200);
echo $voiture1->calculerEnergieCinetique() . " Joules<br>";
$voiture1->setVitesse(60);
echo $voiture1->calculerEnergieCinetique() . " Joules<br>";

// var_dump($voiture1);





//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////


$marvin = new Utilisateur(); 
$cynthia = new Utilisateur();

$marvin->setNom = 'Marvin';
$marvin->setPass = 'toto';

echo $marvin->getNom(). '<br>';

$cynthia->setNom = 'Cynthia';
$cynthia->setPass = 'tata';