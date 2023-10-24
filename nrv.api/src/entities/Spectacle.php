<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Spectacle extends Model
{
    protected $table = "spectacle";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ['titre', 'description', 'id_soiree', 'id_theme', 'horaire'];

    public function soiree()
    {
        return $this->belongsTo(Soiree::class, 'id_soiree');
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'id_theme');
    }

    public function artistes()
    {
        return $this->belongsToMany(Artiste::class, 'artiste', 'id_spectacle', 'id_artiste')
            ->withPivot("participation");
    }

    public function medias()
    {
        return $this->belongsToMany(Media::class, 'media', 'id_spectacle', 'id_media')
            ->withPivot("illustration_spectacle");
    }


}
