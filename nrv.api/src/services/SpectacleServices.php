<?php

namespace nrv\api\services;

use nrv\api\entities\Spectacle;

class SpectacleServices
{

    public function getSpectacles(): array
    {
        $spectacles = Spectacle::all();
        $spectaclesDTO = [];
        foreach ($spectacles as $spectacle) {
            $spectaclesDTO[] = $spectacle->toDTO();
        }
        return $spectaclesDTO;
    }

    public function getSpectacle(int $id): SpectacleDTO
    {
        return Spectacle::where('id', '=', $id)->firstOrFail()->toDTO();
    }
}