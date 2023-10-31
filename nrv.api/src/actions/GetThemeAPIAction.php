<?php

namespace nrv\api\actions;

use nrv\api\services\ThemeServices;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpBadRequestException;
use nrv\api\renderer\JSONRenderer;


class GetThemeAPIAction{
    private ThemeServices $themeServices;

    public function __construct(ThemeServices $themeServices)
    {
        $this->themeServices = $themeServices;
    }

    public function __invoke(ServerRequestInterface $rq, ResponseInterface $rs, array $args): ResponseInterface{
        $id = $args['id'] ?? null;
        if (is_null($id)) throw new HttpBadRequestException($rq, 'id theme manquant');

        try{
            $theme = $this->themeServices->getTheme($id);
            $data = ['type' => 'ressource',
                "theme" => $theme];
            $code = 200;
        }catch (HttpBadRequestException $e) {
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