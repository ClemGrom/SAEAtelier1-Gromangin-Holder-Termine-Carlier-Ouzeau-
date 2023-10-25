<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use nrv\api\dto\MediaDTO;

class Media extends Model
{
    protected $table = "media";
    protected $primaryKey = "id";
    public $incrementing = true;

    protected $fillable = ["lien", "description"];

    public function spectacles() : BelongsToMany
    {
        return $this->belongsToMany(Spectacle::class, 'spectacle', 'id_media', 'id_spectacle')
            ->withPivot("illustration_spectacle");
    }

    public function lieux() : BelongsToMany
    {
        return $this->belongsToMany(Lieu::class, 'lieu', 'id_media', 'id_lieu')
            ->withPivot("illustration_lieu");
    }

    public function toDTO() : MediaDTO {
        return new MediaDTO(
            $this->id,
            $this->lien,
            $this->description,
            $this->spectacles()->pluck("id")->toArray(),
            $this->lieux()->pluck("id")->toArray()
        );
    }
}
