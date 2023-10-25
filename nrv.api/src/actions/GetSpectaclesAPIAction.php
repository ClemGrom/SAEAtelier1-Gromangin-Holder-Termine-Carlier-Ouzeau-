<?php


namespace nrv\api\actions;

use nrv\api\renderer\JSONRenderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpBadRequestException;

class GetSpectaclesAPIAction
{

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {

        try {
            $spectacles=
            $data=["spectacles"=>[]];
            foreach ($spectacle in $spectacles){
                $data['spectacles'][] = [$spectacle];
            }

            $code = 200;
        }catch(HttpBadRequestException $e){
            $code=404;
        }

        return JSONRenderer::render($rs, $code, $data);
    }
}