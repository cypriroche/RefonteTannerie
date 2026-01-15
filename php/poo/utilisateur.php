<?php

abstract class Utilisateur {
	private int $id;
	private string $nom;
	private string $prenom;
	private string $motDePasse;

	public function __construct(int $id, string $nom, string $prenom, string $motDePasse) {
		$this->id = $id;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->motDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);
	}
}

