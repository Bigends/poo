<?php

class Character {
    public $health;
    public $rage;

    public function __construct($health, $rage)
    {
        $this->health = $health;
        $this->rage = $rage;
    }

    public function presentation() 
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

$employe1 = new Employe("Lior", "Chamla", 32);

$employe2 = new Employe("Chris", "Balkumar", 24);

$employe1->presentation();

?>