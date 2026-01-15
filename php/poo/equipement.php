<?php

class Equipement {
	private int $id;
	private string $type;
	private int $quantite;

	public function __construct(int $id, string $type, int $quantite) {
		$this->id = $id;
		$this->type = $type;
		$this->quantite = $quantite;
	}
}

