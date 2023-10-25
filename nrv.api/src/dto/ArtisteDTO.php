<?php
namespace nrv\api\actions;

class ArtisteDTO extends DTO
{
    public string $id;
    public string $nom_scene;
    public string $nom;
    public string $prenom;

    function __construct(string $id, string $nom_scene, string $nom, string $prenom)
    {
        $this->id = $id;
        $this->nom_scene = $nom_scene;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

}

