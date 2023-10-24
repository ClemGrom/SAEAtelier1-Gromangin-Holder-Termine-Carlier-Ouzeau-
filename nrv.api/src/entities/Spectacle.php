<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Spectacle extends Model
{
    protected $table = "spectacle";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ['titre', 'description', 'id_soiree', 'id_theme', 'video'];

    public function soiree()
    {
        return $this->belongsTo(Soiree::class, 'id');
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'id');
    }

    public function spectacles()
    {
        return $this->belongsToMany(Artiste::class, 'spectacle_artiste', 'id_spectacle', 'id_artiste')
            ->withPivot("participation");
    }

    public function medias()
    {
        return $this->belongsToMany(Media::class, 'spectacle_media', 'id_spectacle', 'id_media')
            ->withPivot("illustration_spectacle");
    }


}
