<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use nrv\api\dto\ArtisteDTO;

class Artiste extends Model
{
    protected $table = "artiste";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["nom", "prenom", "nom_scene"];

    public function spectacles() : BelongsToMany
    {
        return $this->belongsToMany(Spectacle::class, 'spectacle', 'id_artiste', 'id_spectacle')
            ->withPivot("participation");
    }

    public function toDTO() : ArtisteDTO {
        return new ArtisteDTO(
            $this->id,
            $this->nom_scene,
            $this->nom,
            $this->prenom,
            $this->spectacles()->pluck("id")->toArray()
        );
    }


}
