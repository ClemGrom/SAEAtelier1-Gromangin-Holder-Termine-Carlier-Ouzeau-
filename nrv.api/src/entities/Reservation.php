<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use nrv\api\dto\ReservationDTO;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $primaryKey = 'uuid';
    protected $keyType = "string";
    protected $fillable = ["id_commande", "id_soiree", "type_tarif", "nb_places"];

    public function commande() : BelongsTo
    {
        return $this->belongsTo(Commande::class, "id_commande");
    }

    public function soiree() : BelongsTo
    {
        return $this->belongsTo(Soiree::class, "id_soiree");
    }

    public function billets() : HasMany
    {
        return $this->hasMany(Billet::class, "id_reservation");
    }

    public function toDTO() : ReservationDTO {
        return new ReservationDTO(
            $this->uuid,
            $this->type_tarif,
            $this->nb_places,
            $this->id_commande,
            $this->soiree()->first()->toDTO(),
            $this->billets()->get()->map(function($billet) {
                return $billet->toDTO();
            })->toArray()
        );
    }
}