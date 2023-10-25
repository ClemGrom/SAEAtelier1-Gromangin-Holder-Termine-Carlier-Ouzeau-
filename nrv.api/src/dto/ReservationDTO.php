<?php

namespace nrv\api\dto;



class ReservationDTO extends DTO{
    public string $uuid;
    public int $type_tarif;
    public int $nb_places;
    public CommandeDTO $commande;
    public SoireeDTO $soiree;

    function __construct(string $uuid, int $type_tarif, int $nb_places, CommandeDTO $commande, SoireeDTO $soiree)
    {
        $this->uuid = $uuid;
        $this->type_tarif = $type_tarif;
        $this->nb_places = $nb_places;
        $this->commande = $commande;
        $this->soiree = $soiree;
    }
}