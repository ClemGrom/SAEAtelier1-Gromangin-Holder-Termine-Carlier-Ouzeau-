<?php

namespace nrv\api\actions;

use Exception;
use nrv\api\dto\UtilisateurDTO;
use nrv\api\renderer\JSONRenderer;
use nrv\api\services\CsrfService;
use nrv\api\services\UtilisateurServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PostCreationUtilisateurAction
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
            //Validate data: nom prenom email password
            $nom = filter_var($post_data['nom'], FILTER_SANITIZE_STRING);
            $prenom = filter_var($post_data['prenom'], FILTER_SANITIZE_STRING);
            $email = filter_var($post_data['email'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($post_data['password'], FILTER_SANITIZE_STRING);
            if ($post_data['passwordRepeat'] != $password) throw new Exception("Les mots de passe ne correspondent pas");

            $this->userservices->createUser(
                new UtilisateurDTO($nom, $prenom, $email, 0, null, $password)
            );
            $data = [
                "message" => "Utilisateur créé"
            ];

            $code = 200;
        } catch (Exception $e) {
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
