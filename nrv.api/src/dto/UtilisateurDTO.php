<?php

namespace nrv\api\dto;

class UtilisateurDTO extends DTO
{
    public string $uuid;
    public string $nom;
    public string $prenom;
    public string $email;
    public bool $admin;
    public array $commandes;
    public string $password;//Doit être utilisé que pour le transit |ACTION->SERVICE|(ex creation user) ET !SURTOUT! PAS |SERVICE->ACTION|(ex: listage user, mdp pas important + doit être null)

    public function __construct(string $uuid, string $nom, string $prenom, string $email, bool $admin, array $commandes, string $password=null)
    {
        $this->uuid = $uuid;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->admin = $admin;
        $this->commandes = $commandes;
        $this->password = $password;
    }
}
