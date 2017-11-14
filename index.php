<?php


require_once('class/Personne.php');
require_once('class/Conseiller.php');
require_once('class/Client.php');
require_once('class/PersonneManager.php');
require_once('class/CompteManager.php');
require_once('class/Compte.php');
require_once('class/Operation.php');

$personneManager = PersonneManager::getInstance();

$conseiller1 = $personneManager->addConseiller("Monsieur", "le conseiller");
$client1 = $personneManager->addClient("Christopher", "Fourgeaud", $conseiller1 );

$compte1 = new Compte(0,$client1,$conseiller1,150);
$cptmanager = new CompteManager();
$cptmanager->ouvrirCompteClient($client1,$conseiller1);
var_dump($cptmanager);

$cptmanager->operation(0,150,"Dépot initial $$");

var_dump($cptmanager);

