<?php


namespace nrv\api\actions;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpBadRequestException;

class GetSoireeAPIAction
{

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {
        $id=$args['id'] ?? null;
        if (is_null($id)) throw new HttpBadRequestException($rq, 'id soiree manquant');

        try{

        }


    }
}