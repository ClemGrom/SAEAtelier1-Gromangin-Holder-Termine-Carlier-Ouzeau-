<?php
namespace nrv\api\dto;

class BilletDTO extends DTO
{
    public string $uuid;
    public string $id_reservation;

    function __construct(string $uuid, string $id_reservation)
    {
        $this->uuid = $uuid;
        $this->id_reservation = $id_reservation;
    }
   

}