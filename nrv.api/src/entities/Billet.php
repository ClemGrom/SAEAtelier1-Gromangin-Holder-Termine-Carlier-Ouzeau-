<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    protected $table = "billet";
    protected $primaryKey = "uuid";

    protected $fillable = ["id_soiree", "id_tarif", "id_reservation"];

    public function tarif()
    {
        return $this->belongsTo(Tarif::class, "id_tarif");
    }

    public function soiree()
    {
        return $this->belongsTo(Soiree::class, "id_soiree");
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, "id_reservation");
    }


}
