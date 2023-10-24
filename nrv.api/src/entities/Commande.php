<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    protected $table = 'commande';
    protected $primaryKey = 'uuid';
    protected $keyType = "string";
    protected $fillable = ["id_utilisateur", "statut"];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_commande');
    }


}