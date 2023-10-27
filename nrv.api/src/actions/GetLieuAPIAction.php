<?php

namespace nrv\api\actions;


use nrv\api\renderer\JSONRenderer;
use nrv\api\services\LieuServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpBadRequestException;

class GetLieuAPIAction{
    private LieuServices $lieuServices;

    public function __construct(LieuServices $lieuServices)
    {
        $this->lieuServices = $lieuServices;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {
        $id = $args['id'] ?? null;
        if (is_null($id)) throw new HttpBadRequestException($rq, 'id lieu manquant');

        try {
            $lieu = $this->lieuServices->getLieu($id);
            $data = ['type' => 'ressource',
                "lieu" => $lieu];
            $code = 200;
        } catch (HttpBadRequestException $e) {
            $data = [
                "message" => "404 Not Found",
                "exception" => [[
                    "type" => "Slim\Exception\HttpNotFoundException",
                    "message" => $e->getMessage(),
                    "code" => $e->getCode(),
                    "file" => $e->getFile(),
                    "line" => $e->getLine(),
                ]]
            ];
            $code = 404;
        }

        return JSONRenderer::render($rs, $code, $data);
    }
}