<?php

namespace nrv\api\dto;

class LieuDTO extends DTO{
    public int $id;
    public string $nom;
    public string $adresse;
    public int $nb_place_assises;
    public int $nb_place_debout;

    function __construct(int $id, string $nom, string $adresse, int $nb_place_assises, int $nb_place_debout)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->nb_place_assises = $nb_place_assises;
        $this->nb_place_debout = $nb_place_debout;
    }

}