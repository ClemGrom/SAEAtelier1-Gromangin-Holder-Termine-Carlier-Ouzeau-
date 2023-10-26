<?php


namespace nrv\api\actions;

use nrv\api\renderer\JSONRenderer;
use nrv\api\services\SoireeServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpBadRequestException;

class GetSoireesAPIAction
{


    private SoireeServices $soireeservices;

    public function __construct(SoireeServices $soirser)
    {
        $this->soireeservices = $soirser;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {

        try {
            $soirees = $this->soireeservices->getSoirees();
            $data = ['type' => 'ressource',
                "soirees" => []];
            foreach ($soirees as $soiree) {
                $data['soirees'][] = [$soiree];
            }
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
