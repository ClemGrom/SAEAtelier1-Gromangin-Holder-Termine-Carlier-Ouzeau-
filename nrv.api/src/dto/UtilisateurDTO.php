<?php

namespace nrv\api\dto;

class UtilisateurDTO extends DTO
{
    public string $uuid;
    public string $nom;
    public string $prenom;
    public string $email;
    public bool $admin;

    public function __construct(string $uuid, string $nom, string $prenom, string $email, bool $admin)
    {
        $this->uuid = $uuid;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->admin = $admin;
    }
}
