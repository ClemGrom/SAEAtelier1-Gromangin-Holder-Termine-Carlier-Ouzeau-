<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{

    protected $table = "theme";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ['nom'];

    public function spectacles()
    {
        return $this->hasMany(Spectacle::class, 'id');
    }

    public function soirees()
    {
        return $this->hasMany(Soiree::class, 'id');
    }

}
