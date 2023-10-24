<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'tarif';
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["soiree", "tarif_normal", "tarif_reduit"];

    public function soiree()
    {
        return $this->belongsTo(Soiree::class, 'soiree');
    }

}
