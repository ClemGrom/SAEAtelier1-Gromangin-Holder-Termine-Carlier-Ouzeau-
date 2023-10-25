<?php


namespace nrv\api\services;

use nrv\api\entities\Artiste;
use nrv\api\dto\ArtisteDTO;

class ArtisteServices
{
    public function getArtiste(int $id): ArtisteDTO
    {
        return Artiste::where('id', '=', $id)->firstOrFail()->toDTO();
    }

}