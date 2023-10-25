<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use nrv\api\dto\TarifDTO;

class Tarif extends Model
{
    protected $table = 'tarifs';
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["tarif_normal", "tarif_reduit"];

    public function soirees() : HasMany
    {
        return $this->hasMany(Soiree::class, 'id_tarif');
    }

    public function toDTO() : TarifDTO {
        return new TarifDTO(
            $this->id,
            $this->tarif_normal,
            $this->tarif_reduit,
            $this->soirees()->pluck("id")->toArray()
        );
    }

}
