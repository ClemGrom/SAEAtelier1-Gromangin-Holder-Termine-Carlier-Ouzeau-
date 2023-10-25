<?php

namespace nrv\api\services;

class LieuServices
{
    public function getLieu(int $id): LieuDTO
    {
        return Lieu::where('id', '=', $id)->firstOrFail()->toDTO();
    }
}