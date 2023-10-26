<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use nrv\api\dto\UtilisateurDTO;

class Utilisateur extends Model
{
    protected $table = "utilisateur";
    protected $primaryKey = "uuid";
    protected $keyType = "string";
    protected $fillable = ["nom", "prenom", "email", "password", "admin"];

    public function commandes() : HasMany
    {
        return $this->hasMany(Commande::class, 'id_utilisateur');
    }

    public function toDTO() : UtilisateurDTO {
        return new UtilisateurDTO(
            $this->nom,
            $this->prenom,
            $this->email,
            $this->admin,
            $this->commandes()->get()->map(function($commande) {
                return $commande->toDTO();
            })->toArray(),
            $this->uuid,
        );
    }

}
