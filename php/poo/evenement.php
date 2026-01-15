<?php

class Evenement {
	private int $id;
	private string $date;
	private string $heureDebut;
	private string $style;
	private string $artiste;
	private string $visuel;
	private string $heureOuverture;
	private float $tarifPlein;
	private float $tarifReduit;
	private string $informations;
	private bool $accessibilite;

	public function __construct(int $id, string $date, string $heureDebut, string $style, string $artiste, string $visuel, string $heureOuverture, float $tarifPlein, float $tarifReduit, string $informations, bool $accessibilite) {
		$this->id = $id;
		$this->date = $date;
		$this->heureDebut = $heureDebut;
		$this->style = $style;
		$this->artiste = $artiste;
		$this->visuel = $visuel;
		$this->heureOuverture = $heureOuverture;
		$this->tarifPlein = $tarifPlein;
		$this->tarifReduit = $tarifReduit;
		$this->informations = $informations;
		$this->accessibilite = $accessibilite;
	}
}

