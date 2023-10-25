<?php

namespace nrv\api\dto;

class ThemeDTO extends DTO
{
    public string $name;

    public array $soirees; //Tableau de id de soirees

    public array $spectacles; //Tableau de id de spectacles

    public function __construct(string $name, array $soirees, array $spectacles)
    {
        $this->name = $name;
        $this->soirees = $soirees;
        $this->spectacles = $spectacles;
    }

}