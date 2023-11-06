<?php


namespace nrv\api\actions;

use nrv\api\renderer\JSONRenderer;
use nrv\api\services\SoireeServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpBadRequestException;

class GetSoireeAPIAction
{


    private SoireeServices $soireeServices;

    public function __construct(SoireeServices $soireeser)
    {
        $this->soireeServices = $soireeser;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {
        $id = $args['id'] ?? null;
        if (is_null($id)) throw new HttpBadRequestException($rq, 'id soiree manquant');

        try {
            $soiree = $this->soireeServices->getSoiree(intval($id));
            $data = ['type' => 'ressource',
                "soiree" => $soiree];
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
