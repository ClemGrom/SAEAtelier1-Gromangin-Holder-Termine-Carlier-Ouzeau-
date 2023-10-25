<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use nrv\api\dto\LieuDTO;

class Lieu extends Model
{
    protected $table = "lieu";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ["nom", "adresse", "nb_place_assises", "nb_place_debout"];

    public function soirees() : HasMany
    {
        return $this->hasMany(Soiree::class, 'id');
    }

    public function medias() : BelongsToMany
    {
        return $this->belongsToMany(Media::class, 'lieu', 'id_lieu', 'id_media')
            ->withPivot("illustration_lieu");
    }

    public function toDTO() : LieuDTO {
        return new LieuDTO(
            $this->id,
            $this->nom,
            $this->adresse,
            $this->nb_place_assises,
            $this->nb_place_debout,
            $this->medias()->get()->map(function($media) {
                return $media->toDTO();
            })->toArray(),
            $this->soirees()->pluck("id")->toArray()
        );

    }
}
