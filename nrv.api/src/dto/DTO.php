<?php

namespace nrv\api\dto;

abstract class DTO
{

    public function __toString(): string
    {
        return json_encode(get_object_vars($this));
    }

}