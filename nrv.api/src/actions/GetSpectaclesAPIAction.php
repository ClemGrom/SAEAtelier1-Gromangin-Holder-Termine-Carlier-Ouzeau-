<?php


namespace nrv\api\actions;

use nrv\api\renderer\JSONRenderer;
use nrv\api\services\SpectacleServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpBadRequestException;

class GetSpectaclesAPIAction
{


    private SpectacleServices $specservices;

    public function __construct(SpectacleServices $specser)
    {
        $this->specservices = $specser;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {

        try {
            $spectacles = $this->specservices->get('spectacle.service')->getSpectacles();
            $data = ['type' => 'ressource',
                "spectacles" => []];
            foreach ($spectacles as $spectacle) {
                $data['spectacles'][] = [$spectacle];
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
