<?php

namespace nrv\api\actions;

use nrv\api\renderer\JSONRenderer;
use nrv\api\services\UtilisateurServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class GetDeconnexionAction
{
    private UtilisateurServices $utilisateurServices;

    public function __construct(UtilisateurServices $service)
    {
        $this->utilisateurServices = $service;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {
        $this->utilisateurServices->deconnexion();
        return JSONRenderer::render($rs, 200, ['message' => 'deconnexion ok']);
    }
}
