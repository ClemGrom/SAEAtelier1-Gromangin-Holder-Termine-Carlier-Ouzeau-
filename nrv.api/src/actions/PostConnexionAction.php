<?php

namespace nrv\api\actions;

use Exception;
use nrv\api\renderer\JSONRenderer;
use nrv\api\services\CsrfService;
use nrv\api\services\UtilisateurServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpBadRequestException;

class PostConnexionAction
{

    private UtilisateurServices $utilisateurServices;
    private CsrfService $csrfService;

    public function __construct(UtilisateurServices $service, CsrfService $csrfService)
    {
        $this->utilisateurServices = $service;
        $this->csrfService = $csrfService;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {
        $post_data = $rq->getParsedBody();

        try {
            $this->csrfService->check($post_data['csrf']);
        } catch (Exception $e) {
            throw new HttpBadRequestException($rq, "token invalide");
        }

        try {
            $this->utilisateurServices->connexion($post_data['email'], $post_data['mdp']);
            $data = ['message' => 'Connexion Effectuée'];
            $code = 200;
        } catch (Exception $e) {
            $data = ['message' => 'Connexion Impossible'];
            $code = 401;
        }

        return JSONRenderer::render($rs, $code, $data);


    }
}
