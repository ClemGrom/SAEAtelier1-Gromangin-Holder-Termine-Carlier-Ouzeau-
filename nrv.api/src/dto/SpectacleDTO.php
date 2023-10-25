<?php

namespace nrv\api\dto;

class SpectacleDTO extends DTO
{
    public string $id;
    public string $titre;
    public string $description;
    public string $horaire;
    public int $id_soiree;
    public ThemeDTO $id_theme;

    public function __construct(string $id, string $titre, string $description, string $horaire, int $id_soiree, ThemeDTO $id_theme)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->horaire = $horaire;
        $this->id_soiree = $id_soiree;
        $this->id_theme = $id_theme;
    }


}
