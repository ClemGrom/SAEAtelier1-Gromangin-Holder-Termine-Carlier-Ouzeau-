<?php

namespace nrv\api\services;

use nrv\api\dto\ReservationDTO;
use nrv\api\entities\Reservation;

class ReservationServices{
    public function getReservation(string $uuid): ReservationDTO
    {
        return Reservation::where('uuid', '=', $uuid)->firstOrFail()->toDTO();
    }
}