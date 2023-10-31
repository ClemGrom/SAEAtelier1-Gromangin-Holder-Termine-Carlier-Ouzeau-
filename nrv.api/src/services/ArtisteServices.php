<?php

namespace nrv\api\services;

use nrv\api\dto\ArtisteDTO;
use nrv\api\entities\Artiste;

class ArtisteServices{
    public function getArtiste(int $id): ArtisteDTO
    {
        return Artiste::where('id', '=', $id)->firstOrFail()->toDTO();
    }
}