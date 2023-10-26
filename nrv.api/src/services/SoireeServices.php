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

    public function getSoirees(): array
    {
        $soirees = Soiree::all();
        $soireesDTO = [];
        foreach ($soirees as $soiree) {
            $soireesDTO[] = $soiree->toDTO();
        }
        return $soireesDTO;
    }

}
