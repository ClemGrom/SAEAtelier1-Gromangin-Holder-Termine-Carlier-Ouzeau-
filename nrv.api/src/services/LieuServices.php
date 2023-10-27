<?php
namespace nrv\api\services;

use nrv\api\dto\LieuDTO;
use nrv\api\entities\Lieu;

class LieuServices{
    public function getLieu(int $id): LieuDTO
    {
        return Lieu::where('id', '=', $id)->firstOrFail()->toDTO();
    }
    
    public function getLieux(){
        $lieux = Lieu::all();
        $lieuxDTO = [];
        foreach ($lieux as $lieu) {
            $lieuxDTO[] = $lieu->toDTO();
        }
        return $lieuxDTO;
    }


}