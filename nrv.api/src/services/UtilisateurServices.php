<?php

namespace nrv\api\services;

use nrv\api\dto\UtilisateurDTO;
use nrv\api\entities\Utilisateur;

class UtilisateurServices
{
    public function getUtilisateur(string $uuid): UtilisateurDTO
    {
        return Utilisateur::where('uuid', '=', $uuid)->firstOrFail()->toDTO();
    }

}