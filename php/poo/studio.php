<?php

require_once __DIR__ . '/equipement.php';

class Studio {
    private int $id;
    private string $nom;
    private bool $disponible;
    private array $equipements;

    public function __construct(int $id, string $nom, bool $disponible = true, array $equipements = []) {
        $this->id = $id;
        $this->nom = $nom;
        $this->disponible = $disponible;
        $this->equipements = $equipements;
    }
}
