<?php

class Compte {
	// Propriétés
	private $numero_compte;
	private $client;
	private $solde;


	function __construct($client, $montant_depot) {

		$this->client = $client;
		$this->solde = $montant_depot;
	}

	//creation outils "depot" 
	public function depot($montant) {
		$this->solde += $montant;
		return $this;
	}
	//creation outils "retrait" 
	public function retrait($montant) {
		if($this->solde - $montant >= 0) {
			$this->solde -= $montant;
			return true;
			return $this;
		} else {
			return false;
		}
	}

	public function virement($compte, $montant) {
		if( $montant > 0 ){
		$this->retrait($montant);
		$compte->depot($montant);
		}
	}
}