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
    public string $commande_actuelle;

    public function __construct(string $nom, string $prenom, string $email, bool $admin = null, array $commandes = null, string $uuid = null, string $password = null, string $commande_actuelle = null)
    {
        $this->uuid = $uuid;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->admin = $admin;
        $this->commandes = $commandes;
        $this->password = $password;
        $this->commande_actuelle = $commande_actuelle;
    }
}
