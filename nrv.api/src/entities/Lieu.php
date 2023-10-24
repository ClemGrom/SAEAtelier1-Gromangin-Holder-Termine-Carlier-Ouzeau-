<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    protected $table = "lieu";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ["nom", "adresse", "nb_place_assises", "nb_place_debout"];

    public function soirees()
    {
        return $this->hasMany(Soiree::class, 'id');
    }

    public function medias()
    {
        return $this->belongsToMany(Media::class, 'lieu', 'id_lieu', 'id_media')
            ->withPivot("illustration_lieu");
    }
}
