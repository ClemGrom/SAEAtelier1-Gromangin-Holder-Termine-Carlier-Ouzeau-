<?php

namespace nrv\api\services;

use nrv\api\dto\BilletDTO;
use nrv\api\entities\Billet;

class BilletServices
{
    function getBillet(string $uuid): BilletDTO
    {
        return Billet::where('uuid', '=', $uuid)->firstOrFail()->toDTO();
        
    }
  
}
