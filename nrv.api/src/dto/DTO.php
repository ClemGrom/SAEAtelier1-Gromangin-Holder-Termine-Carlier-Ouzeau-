<?php

namespace nrv\api\dto;

abstract class DTO
{

    public function toJSON(): string
    {
        return json_encode(get_object_vars($this));
    }

}