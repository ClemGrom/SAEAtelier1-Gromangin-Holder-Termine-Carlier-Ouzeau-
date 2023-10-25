<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use nrv\api\dto\BilletDTO;

class Billet extends Model
{
    protected $table = "billet";
    protected $primaryKey = "uuid";
    protected $keyType = "string";

    protected $fillable = ["id_reservation"];

    public function reservation() : BelongsTo
    {
        return $this->belongsTo(Reservation::class, "id_reservation");
    }

    public function toDTO() : BilletDTO {
        return new BilletDTO(
            $this->uuid,
            $this->reservation()->first()->uuid
        );
    }
}
