<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Soiree extends Model
{
    protected $table = "soiree";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["nom", "theme", "date", "lieu", "id_tarif"];

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme');
    }

    public function tarif()
    {
        return $this->belongsTo(Tarif::class, 'id_tarif');
    }

    public function lieu()
    {
        return $this->belongsTo(Lieu::class, 'lieu');
    }

    public function spectacles()
    {
        return $this->hasMany(Spectacle::class, 'id_soiree');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_soiree');
    }

}
