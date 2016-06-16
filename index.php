<?php

// EXERCICE BANQUE 
// dépôt, retraits, transferts

// Créer les classes nécessaires pour décrire le fonctionnement d'une banque

// require 'classes/Banque.php';
require 'classes/Client.php';
require 'classes/Compte.php';

// nouveau client
$client_1 = new Client('Vincent','Marcus');
// nouveau compte sur client 1 avec depot de 500
$compte_1 = new Compte($client_1, 500); 
// nouveau compte sur client 1 avec depot de 1000
$compte_2 = new Compte($client_1,1000);

// // depot de 200 (compte_1)
// $compte_1->depot(200);

// // depot de 100 (compte_1)
// $compte_1->depot(100);

// // retrait de 200 (compte_2)
// $compte_2->retrait(200);

// if($compte_1->retrait(1000) == true) {
// 	echo "OK";
// } else {
// 	echo "Votre soldes ne permet pas ce retrait";
// }

// // depot de 100, depot de 100 et retrait de 500 (compte_1) (chainage)
// $compte_1->depot(100)->depot(100)->retrait(500);

// virement de 50 de compte_1 a compte_2
$compte_1->virement($compte_2,50);

var_dump($compte_1);
var_dump($compte_2);