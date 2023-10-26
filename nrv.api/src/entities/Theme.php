<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use nrv\api\dto\ThemeDTO;

class Theme extends Model
{

    protected $table = "theme";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ['nom'];

    public function spectacles() : HasMany
    {
        return $this->hasMany(Spectacle::class, 'id_theme');
    }

    public function soirees() : HasMany
    {
        return $this->hasMany(Soiree::class, 'id_theme');
    }

    public function toDTO() : ThemeDTO {
        return new ThemeDTO(
            $this->id,
            $this->nom,
            $this->spectacles()->pluck("id")->toArray(),
            $this->soirees()->pluck("id")->toArray()
        );
    }

}
