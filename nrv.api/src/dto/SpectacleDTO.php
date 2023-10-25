<?php

namespace nrv\api\dto;

class SpectacleDTO extends DTO
{
    public string $id;
    public string $titre;
    public string $description;
    public string $horaire;
    public int $id_soiree;
    public ThemeDTO $theme;
    public array $medias;
    public array $artistes;

    public function __construct(string $id, string $titre, string $description, string $horaire, int $id_soiree, ThemeDTO $theme, array $medias, array $artistes)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->horaire = $horaire;
        $this->id_soiree = $id_soiree;
        $this->theme = $theme;
        $this->medias = $medias;
        $this->artistes = $artistes;
    }

}
