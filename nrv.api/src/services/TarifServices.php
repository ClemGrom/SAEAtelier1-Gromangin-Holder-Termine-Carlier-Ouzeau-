<?php

namespace nrv\api\services;

use nrv\api\dto\TarifDTO;
use nrv\api\entities\Tarif;

class TarifServices
{
    public function getTarif(int $id): TarifDTO
    {
        return Tarif::where('id', '=', $id)->firstOrFail()->toDTO();
    }

}