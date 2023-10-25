<?php

namespace nrv\api\services;

use nrv\api\dto\MediaDTO;
use nrv\api\entities\Media;

class MediaServices{
    public function getMedia(int $id): MediaDTO
    {
        return Media::where('id', '=', $id)->firstOrFail()->toDTO();
    }
}