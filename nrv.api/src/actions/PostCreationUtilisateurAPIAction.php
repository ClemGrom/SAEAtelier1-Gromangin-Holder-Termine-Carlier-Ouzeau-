<?php

namespace nrv\api\action;

use Exception;
use nrv\api\renderer\JSONRenderer;
use nrv\api\services\CsrfService;
use nrv\api\services\UtilisateurServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PostCreationUtilisateurAPIAction
{
    private UtilisateurServices $userservices;
    private CsrfService $csrfservice;

    public function __construct(UtilisateurServices $us, CsrfService $service)
    {
        $this->userservices = $us;
        $this->csrfservice = $service;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface
    {
        $post_data = $rq->getParsedBody();
        try {
            $this->csrfservice::check($post_data['csrf']);
        } catch (Exception $e) {
            $data = [
                'message' => 'invalid csrf token'
            ];
            return JSONRenderer::render($rs, 419, $data);
        }

        try {
            //TODO: utilisation service utilisateur pour la création de compte
            //TODO: retour de l'api pour confirmer la création de compte
            $code = 200;
        } catch (Exception $e) {
            $token = $this->csrfservice::generate();
            $data = [
                "message" => "Données d'inscription invalides",
                "exception" => [[
                    "message" => $e->getMessage(),
                    "code" => $e->getCode(),
                    "file" => $e->getFile(),
                    "line" => $e->getLine(),
                ]]
            ];
            $code = 422;


        }
        return JSONRenderer::render($rs, $code, $data);


    }
}
