<h1>POO Entreprise</h1>


<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name .'.php'; // 'classes/' puisque nos fichiers de classe ont été stockés dans le dossier 'classes'
});

$elanFormation = new Entreprise ("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
$viaFormation = new Entreprise ("Via FORMATION", "1980-01-01", "32 rue des tulipes", "67200", "STRASBOURG");
$ducros = new Entreprise ("DUCROS", "1967-08-01", "7 rue du poivre du moulin", "11000", "CARCASSONNE");


$stephane = new Employe ("SMAIL", "Stéphane", "stephane@elan-formation.fr");
$mickael = new Employe ("MURMANN", "Mickaël", "mickael@elan-formation.fr");

$c1 = new Contrat ($elanFormation, $stephane, "2015-05-22", "CDI");
$c2 = new Contrat ($elanFormation, $mickael, "2010-07-18", "CDD");
$c3 = new Contrat ($viaFormation, $stephane, "2018-04-22", "Interim");
$c4 = new Contrat ($ducros, $stephane, "2023-05-01", "CDI");



echo $elanFormation->afficherEmployes ();

echo $viaFormation->afficherEmployes ();

echo $ducros->afficherEmployes ();

echo $stephane->afficherEntreprises ();

echo $mickael->afficherEntreprises ();


