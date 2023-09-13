<?php

class Club {
    private $id;
    private $nom;
    private $description;
    private $adresse;
    private $domaine;

    public function __construct($id,$nom,$description,$adresse,$domaine)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->domaine = $domaine;
    }

    public function afficheClub(){
        echo " Id : $this->id <br> Nom : $this->nom <br> Description :  $this->description <br> Adresse : $this->adresse <br> Domaine : $this->domaine";
    }
}


$clubObject = new Club(1,"club robotique","test","Esprit Ghazela","Eletromecanique");
$clubObject->afficheClub();


?>