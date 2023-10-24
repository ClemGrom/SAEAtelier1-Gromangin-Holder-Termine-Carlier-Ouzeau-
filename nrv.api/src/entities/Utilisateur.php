<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = "utilisateur";
    protected $primaryKey = "uuid";
    protected $keyType = "string";
    protected $fillable = ["nom", "prenom", "email", "password", "admin"];

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'id_utilisateur');
    }
}
