<?php

namespace nrv\api\services;

class BilletServices
{
    function getBillet(string $uuid): BilletDTO
    {
        return Billet::where('uuid', '=', $uuid)->firstOrFail()->toDTO();
        
    }
  
}
