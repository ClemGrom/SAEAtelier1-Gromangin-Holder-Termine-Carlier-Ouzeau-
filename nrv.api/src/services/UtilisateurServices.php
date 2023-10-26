<?php

namespace nrv\api\services;

use nrv\api\dto\UtilisateurDTO;
use nrv\api\entities\Utilisateur;
use Ramsey\Uuid\Uuid;

class UtilisateurServices
{
    public function getUtilisateur(string $uuid): UtilisateurDTO
    {
        return Utilisateur::where('uuid', '=', $uuid)->firstOrFail()->toDTO();
    }

    public function createUser(UtilisateurDTO $utilisateurDTO): UtilisateurDTO
    {
        $utilisateur = new Utilisateur();
        $utilisateur->uuid = Uuid::uuid4()->toString();
        $utilisateur->nom = $utilisateurDTO->nom;
        $utilisateur->prenom = $utilisateurDTO->prenom;
        $utilisateur->email = $utilisateurDTO->email;
        $utilisateur->password = password_hash($utilisateurDTO->password, PASSWORD_DEFAULT);
        $utilisateur->admin = 0;
        $utilisateur->save();
        return $utilisateur->toDTO();
    }

}