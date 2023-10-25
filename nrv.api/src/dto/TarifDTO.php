<?php

namespace nrv\api\dto;

class TarifDTO extends DTO
{
    public string $id;
    public float $tarif_normal;
    public float $tarif_reduit;
    public int $id_soiree;

    public function __construct(string $id, float $tarif_normal, float $tarif_reduit, int $id_soiree)
    {
        $this->id = $id;
        $this->tarif_normal = $tarif_normal;
        $this->tarif_reduit = $tarif_reduit;
        $this->id_soiree = $id_soiree;
    }
}
