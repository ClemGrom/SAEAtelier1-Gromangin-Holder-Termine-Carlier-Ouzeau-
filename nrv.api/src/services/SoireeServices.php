<?php

namespace nrv\api\services;

use nrv\api\dto\SoireeDTO;
use nrv\api\entities\Soiree;

class SoireeServices
{
    public function getSoiree(int $id): SoireeDTO
    {
        return Soiree::where('id', '=', $id)->firstOrFail()->toDTO();
    }

    

}
