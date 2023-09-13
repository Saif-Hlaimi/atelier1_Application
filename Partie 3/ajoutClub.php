<?php

$id = $_POST['id'];
$nom = $_POST['nom'];
$desc = $_POST['description'];
$adresse = $_POST['adresse'];
$domaine = $_POST['domaine'];

require_once("C:\Users\saifh\OneDrive\Bureau\atelier\Partie 3");

$club1 = new Club($id, $nom, $desc, $adresse, $domaine);
var_dump($club1);

?>