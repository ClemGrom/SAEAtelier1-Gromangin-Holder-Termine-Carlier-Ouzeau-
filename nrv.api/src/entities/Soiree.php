<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use nrv\api\dto\SoireeDTO;

class Soiree extends Model
{
    protected $table = "soiree";
    protected $primaryKey = "id";
    public $incrementing = true;
    protected $fillable = ["nom", "theme", "date", "lieu", "id_tarif"];

    public function theme() : BelongsTo
    {
        return $this->belongsTo(Theme::class, 'theme');
    }

    public function tarif() : BelongsTo
    {
        return $this->belongsTo(Tarif::class, 'id_tarif');
    }

    public function lieu() : BelongsTo
    {
        return $this->belongsTo(Lieu::class, 'lieu');
    }

    public function spectacles() : HasMany
    {
        return $this->hasMany(Spectacle::class, 'id_soiree');
    }

    public function reservations() : HasMany
    {
        return $this->hasMany(Reservation::class, 'id_soiree');
    }

    public function toDTO() : SoireeDTO {
        return new SoireeDTO(
            $this->id,
            $this->nom,
            $this->theme()->first()->toDTO(),
            new \DateTime($this->date),
            $this->lieu()->first()->toDTO(),
            $this->tarif()->first()->toDTO(),
            $this->spectacles()->get()->map(function($spectacle) {
                return $spectacle->toDTO();
            })->toArray(),
            $this->reservations()->get()->count()
        );
    }

}
