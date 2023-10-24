<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'tarifs';
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["tarif_normal", "tarif_reduit"];

    public function soiree()
    {
        return $this->hasMany(Soiree::class, 'id_tarif');
    }

}
