<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Soiree extends Model
{
    protected $table = "soiree";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["nom", "theme", "date", "lieu", "horaire", "tarif"];

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'id');
    }

    public function tarif()
    {
        return $this->hasMany(Tarif::class, 'id');
    }

    public function lieu()
    {
        return $this->belongsTo(Lieu::class, 'id');
    }

    public function spectacles()
    {
        return $this->hasMany(Spectacle::class, 'id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id');
    }

}
