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

    public function getSoirees(string $sort = null, string $e = null): array
    {
        $soirees = Soiree::all();
        $soireesDTO = [];
        foreach ($soirees as $soiree) {
            $soireesDTO[] = $soiree->toDTO();
        }
        if (($sort != null) && ($e != null)) {
            if (($sort == 'theme') || ($sort == 'lieu')) {

                $soireesDTO = array_filter($soireesDTO, function ($soiree) use ($sort, $e) {
                    return $soiree->$sort->id == $e;
                });
            } elseif ($sort == 'date') {
                $soireesDTO = array_filter($soireesDTO, function ($soiree) use ($sort, $e) {
                    return str_contains(date_format($soiree->date, "d-m-Y"), $e);
                });
            }
        }
        return $soireesDTO;

    }

}
