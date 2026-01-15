<?php

require_once __DIR__ . '/utilisateur.php';

class Admin extends Utilisateur {
	private string $droits;

	public function __construct(int $id, string $nom, string $prenom, string $motDePasse, string $droits = 'admin') {
		parent::__construct($id, $nom, $prenom, $motDePasse);
		$this->droits = $droits;
	}
}

