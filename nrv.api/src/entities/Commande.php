<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    protected $table = 'commande';
    protected $primaryKey = 'uuid';
    protected $fillable = ["id_client", "statut"];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_client');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_commande');
    }


}