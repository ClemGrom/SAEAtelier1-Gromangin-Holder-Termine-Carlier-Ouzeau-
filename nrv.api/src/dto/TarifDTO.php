<?php

namespace nrv\api\dto;

class TarifDTO extends DTO{
    public string $id;
    public string $nom;
    public float $prix;
    public string $description;

    public function __construct(string $id, string $nom, float $prix, string $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
    }
}
