<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    protected $table = "artiste";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["nom", "prenom", "nom_scene"];

    public function spectacles()
    {
        return $this->belongsToMany(Spectacle::class, 'spectacle_artiste', 'id_artiste', 'id_spectacle')
            ->withPivot("participation");
    }
}
