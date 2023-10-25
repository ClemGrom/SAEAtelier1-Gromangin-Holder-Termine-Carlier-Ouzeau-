<?php
namespace nrv\api\dto;

class BilletDTO extends DTO
{
    public string $uuid;
    public ReservationDTO $reservation;

    function __construct(string $uuid, ReservationDTO $reservation)
    {
        $this->uuid = $uuid;
        $this->reservation = $reservation;
    }
   

}