<?php

namespace nrv\api\dto;

class MediaDTO extends DTO{
    public int $id;
    public string $lien;
    public string $description;

    function __construct(int $id, string $lien, string $description)
    {
        $this->id = $id;
        $this->lien = $lien;
        $this->description = $description;
    }
}