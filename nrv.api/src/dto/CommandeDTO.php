<?php
namespace nrv\api\dto;

class CommandeDTO extends DTO{
    public string $uuid;
    public int $statut;
    public string $id_utilisateur;
    public array $reservations;

    function __construct(string $uuid, int $statut, string $utilisateur, array $reservations)
    {
        $this->uuid = $uuid;
        $this->statut = $statut;
        $this->id_utilisateur = $utilisateur;
        $this->reservations = $reservations;
    }

}