<?php
namespace nrv\api\dto;

use Illuminate\Container\Util;

class CommandeDTO extends DTO{
    public string $uuid;
    public int $status;
    public UtilisateurDTO $utilisateur;

    function __construct(string $uuid, int $status, UtilisateurDTO $utilisateur)
    {
        $this->uuid = $uuid;
        $this->status = $status;
        $this->utilisateur = $utilisateur;
    }

}