<?php

namespace nrv\api\dto;



class ReservationDTO extends DTO{
    public string $uuid;
    public int $type_tarif;
    public int $nb_places;
    public string $uuid_commande;
    public SoireeDTO $soiree;

    function __construct(string $uuid, int $type_tarif, int $nb_places, string $uuid_commande, SoireeDTO $soiree)
    {
        $this->uuid = $uuid;
        $this->type_tarif = $type_tarif;
        $this->nb_places = $nb_places;
        $this->uuid_commande = $uuid_commande;
        $this->soiree = $soiree;
    }
}