<?php


namespace nrv\api\services;

use nrv\api\entities\Artiste;

class ArtisteServices
{
    public function getArtiste(int $id): ArtisteDTO
    {
        return Artiste::where('id', '=', $id)->firstOrFail()->toDTO();
    }

    public function getArtistes(): array
    {
        $artistes = Artiste::all();
        $artistesDTO = [];
        foreach ($artistes as $artiste) {
            $artistesDTO[] = $artiste->toDTO();
        }
        return $artistesDTO;
    }
}