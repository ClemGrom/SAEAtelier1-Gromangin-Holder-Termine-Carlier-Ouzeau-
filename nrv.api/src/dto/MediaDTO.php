<?php

namespace nrv\api\dto;

class MediaDTO extends DTO{
    public int $id;
    public string $lien;
    public string $description;
    public array $id_spectacles;
    public array $id_lieux;

    function __construct(int $id, string $lien, string $description, array $id_spectacles, array $id_lieux)
    {
        $this->id = $id;
        $this->lien = $lien;
        $this->description = $description;
        $this->id_spectacles = $id_spectacles;
        $this->id_lieux = $id_lieux;
    }
}