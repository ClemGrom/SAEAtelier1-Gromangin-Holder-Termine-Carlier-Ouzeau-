<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = "Media";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ["nom", "lien", "description"];

    public function spectacles()
    {
        return $this->belongsToMany(Spectacle::class, 'spectacle', 'id_media', 'id_spectacle')
            ->withPivot("illustration_spectacle");
    }

    public function lieux()
    {
        return $this->belongsToMany(Lieu::class, 'lieu', 'id_media', 'id_lieu')
            ->withPivot("illustration_lieu");
    }
}
