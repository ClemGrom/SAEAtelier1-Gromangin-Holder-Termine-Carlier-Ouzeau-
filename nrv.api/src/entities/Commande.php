<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use nrv\api\dto\CommandeDTO;

class Commande extends Model
{

    protected $table = 'commande';
    protected $primaryKey = 'uuid';
    protected $keyType = "string";
    protected $fillable = ["id_utilisateur", "statut"];

    public function utilisateur() : BelongsTo
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    public function commande_actuelle(): hasMany
    {
        return $this->hasMany(Utilisateur::class, 'commande_actuelle');
    }

    public function reservations() : HasMany
    {
        return $this->hasMany(Reservation::class, 'id_commande');
    }

    public function toDTO() : CommandeDTO {
        return new CommandeDTO(
            $this->uuid,
            $this->statut,
            $this->utilisateur()->first()->uuid,
            $this->reservations()->get()->map(function($reservation) {
                return $reservation->toDTO();
            })->toArray()
        );
    }

}