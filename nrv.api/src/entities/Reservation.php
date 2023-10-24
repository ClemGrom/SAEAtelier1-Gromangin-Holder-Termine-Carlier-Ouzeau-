<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ["id_commande", "id_soiree", "type_tarif", "nb_places"];

    public function commande()
    {
        return $this->belongsTo(Commande::class, "id_commande");
    }

    public function soiree()
    {
        return $this->belongsTo(Soiree::class, "id_soiree");
    }

    public function billets()
    {
        return $this->hasMany(Billet::class, "id_reservation");
    }
}
