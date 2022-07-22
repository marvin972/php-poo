<?php

class Voiture extends Vehicule
{

    public int $nbrRoues = 4;


    // public function __construct(string $couleur)
    // {
    //     $this->marque = $couleur;
    // }

    public function demarrer()
    {
        echo "La voiture démarre";
    }

    public function afficherCouleur(): string
    {
        return "<p>La voiture est de couleur " . $this->couleur . "</p>";
    }

     public function __destruct()
    {
     echo "Coucou, Je suis Destroyed";
    }
}
