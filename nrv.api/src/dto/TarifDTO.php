<?php

namespace nrv\api\dto;

class TarifDTO extends DTO
{
    public string $id;
    public float $tarif_normal;
    public float $tarif_reduit;
    public array $id_soirees;

    public function __construct(string $id, float $tarif_normal, float $tarif_reduit, array $id_soirees)
    {
        $this->id = $id;
        $this->tarif_normal = $tarif_normal;
        $this->tarif_reduit = $tarif_reduit;
        $this->id_soirees = $id_soirees;
    }
}
