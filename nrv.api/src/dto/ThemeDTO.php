<?php

namespace nrv\api\dto;

class ThemeDTO extends DTO
{
    public int $id;

    public string $name;

    public array $id_soirees; //Tableau de id de soirees

    public array $id_spectacles; //Tableau de id de spectacles

    public function __construct(string $name, array $soirees, array $spectacles)
    {
        $this->name = $name;
        $this->id_soirees = $soirees;
        $this->id_spectacles = $spectacles;
    }

}