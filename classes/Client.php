<?php

class Client {
	// Propriétés
	private $numero_client;
	public $nom;
	public $prenom;

	function __construct($nom, $prenom) {

		$this->numero_client = uniqid();
		$this->nom = $nom;
		$this->prenom = $prenom;
	}
}


// $client_1 = new Client("Vincent", "Marcus");
// var_dump($client_1);

// // Creation de 100 clients a la volée...
// $clients = [];
// for($i=0;$i<100;$i++) {
// 	$clients[] = new Client("N".$i, " P".$i);
// }

// echo "<ul>";
// foreach ($clients as $client) {
// 	echo "<li>{$client->nom} {$client->prenom}</li>";
// }
// echo "</ul>";