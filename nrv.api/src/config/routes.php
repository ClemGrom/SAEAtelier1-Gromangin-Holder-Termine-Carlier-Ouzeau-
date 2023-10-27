<?php

use nrv\api\actions\GetConnexionAction;
use nrv\api\actions\GetDeconnexionAction;
use nrv\api\actions\GetSoireeAPIAction;
use nrv\api\actions\GetSpectacleAPIAction;
use nrv\api\actions\GetSpectaclesAPIAction;
use nrv\api\actions\PostConnexionAction;
use nrv\api\actions\PostCreationUtilisateurAction;
use Slim\App;

return function (App $app): void {

    $app->get('/spectacles[/]', GetSpectaclesAPIAction::class)->setName('spectacles');
    $app->get('/spectacles/{id}[/]', GetSpectacleAPIAction::class)->setName('spectacle');

    $app->get('/soiree/{id}[/]', GetSoireeAPIAction::class)->setName('soiree');


    $app->post('/user/create[/]', PostCreationUtilisateurAction::class)->setName('creerUtilisateur');


    $app->get('user/connexion[/]', GetConnexionAction::class)->setName('connexion');
    $app->get('user/deconnexion[/]', GetDeconnexionAction::class)->setName('deconnexion');

    $app->post('user/connexion[/]', PostConnexionAction::class)->setName('connexion');
};