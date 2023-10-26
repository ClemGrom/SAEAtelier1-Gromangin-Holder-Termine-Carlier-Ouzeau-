<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use nrv\api\dto\SpectacleDTO;

class Spectacle extends Model
{
    protected $table = "spectacle";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ['titre', 'description', 'id_soiree', 'id_theme', 'horaire'];

    public function soiree() : BelongsTo
    {
        return $this->belongsTo(Soiree::class, 'id_soiree');
    }

    public function theme() : BelongsTo
    {
        return $this->belongsTo(Theme::class, 'id_theme');
    }

    public function artistes() : BelongsToMany
    {
        return $this->belongsToMany(Artiste::class, 'participation', 'id_spectacle', 'id_artiste');
    }

    public function medias() : BelongsToMany
    {
        return $this->belongsToMany(Media::class, 'illustration_spectacle', 'id_spectacle', 'id_media');
    }

    public function toDTO() : SpectacleDTO {
        return new SpectacleDTO(
            $this->id,
            $this->titre,
            $this->description,
            $this->horaire,
            $this->id_soiree,
            $this->theme()->first()->toDTO(),
            $this->artistes()->get()->map(function($artiste) {
                return $artiste->toDTO();
            })->toArray(),
            $this->medias()->get()->map(function($media) {
                return $media->toDTO();
            })->toArray()
        );
    }

}
