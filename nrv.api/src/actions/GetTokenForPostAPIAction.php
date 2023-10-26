<?php

namespace nrv\api\actions;

use nrv\api\renderer\JSONRenderer;
use nrv\api\services\CsrfService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class GetTokenForPostAPIAction
{
    private CsrfService $csrfService;

    public function __construct(CsrfService $service)
    {
        $this->csrfService = $service;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {
        $data = ['token' => $this->csrfService::generate()];
        return JSONRenderer::render($rs, 200, $data);
    }
}
