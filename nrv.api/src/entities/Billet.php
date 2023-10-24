<?php

namespace nrv\api\entities;

use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    protected $table = "billet";
    protected $primaryKey = "uuid";

    protected $fillable = ["id_reservation"];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, "id_reservation");
    }


}
