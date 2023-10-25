<?php

namespace nrv\api\services;

use nrv\api\entities\Commande;
use nrv\api\dto\CommandeDTO;

class CommandeServices
{
    public function getCommande(string $uuid):CommandeDTO
    {
        return Commande::where('id', '=', $uuid)->firstOrFail()->toDTO();
    }
}