<?php
namespace nrv\api\dto;

class ArtisteDTO extends DTO
{
    public string $id;
    public string $nom_scene;
    public string $nom;
    public string $prenom;
    public array $spectacles;

    function __construct(string $id, string $nom_scene, string $nom, string $prenom, array $spectacles)
    {
        $this->id = $id;
        $this->nom_scene = $nom_scene;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->spectacles = $spectacles;
    }

}

