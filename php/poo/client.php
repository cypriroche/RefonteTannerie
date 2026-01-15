<?php

require_once __DIR__ . '/utilisateur.php';

class Client extends Utilisateur {

	public function __construct(int $id, string $nom, string $prenom, string $motDePasse) {
		parent::__construct($id, $nom, $prenom, $motDePasse);
	}
}

