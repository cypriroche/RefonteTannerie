<?php

abstract class Membre {
	protected int $id;
	protected string $nom;
	protected string $prenom;

	public function __construct(int $id, string $nom, string $prenom) {
		$this->id = $id;
		$this->nom = $nom;
		$this->prenom = $prenom;
	}
}

class MembreCA extends Membre {
	public function __construct(int $id, string $nom, string $prenom) {
		parent::__construct($id, $nom, $prenom);
	}
}

class Salarie extends Membre {
	private string $mail;
	private string $role;
	private string $numeroTelephone;

	public function __construct(int $id, string $nom, string $prenom, string $mail, string $role, string $numeroTelephone) {
		parent::__construct($id, $nom, $prenom);
		$this->mail = $mail;
		$this->role = $role;
		$this->numeroTelephone = $numeroTelephone;
	}

}

?>