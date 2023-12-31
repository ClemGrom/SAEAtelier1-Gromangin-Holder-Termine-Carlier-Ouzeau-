<?php

namespace nrv\api\dto;

class SoireeDTO extends DTO
{
    public int $id;
    public string $nom;
    public ThemeDTO $theme;
    public \DateTime $date;
    public LieuDTO $lieu;
    public TarifDTO $tarif;
    public array $spectacles;
    public int $nb_reservations;

    public function __construct(int $id, string $nom, ThemeDTO $theme, \DateTime $date, LieuDTO $lieu, TarifDTO $tarif, array $spectacles, int $nb_reservations)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->theme = $theme;
        $this->date = $date;
        $this->lieu = $lieu;
        $this->tarif = $tarif;
        $this->spectacles = $spectacles;
        $this->nb_reservations = $nb_reservations;
    }

}
