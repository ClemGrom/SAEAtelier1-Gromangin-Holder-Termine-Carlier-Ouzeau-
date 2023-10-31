<?php

namespace nrv\api\services;

use nrv\api\dto\ThemeDTO;
use nrv\api\entities\Theme;

class ThemeServices
{
    public function getTheme(int $id): ThemeDTO
    {
        return Theme::where('id', '=', $id)->firstOrFail()->toDTO();
    }
}
