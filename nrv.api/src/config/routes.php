<?php

use nrv\api\actions\GetSoireeAPIAction;
use nrv\api\actions\GetSpectacleAPIAction;
use nrv\api\actions\GetSpectaclesAPIAction;
use Slim\App;

return function (App $app):void{

    $app->get('/spectacles[/]', GetSpectaclesAPIAction::class)->setName('spectacles');
    $app->get('/spectacles/{id}[/]', GetSpectacleAPIAction::class)->setName('spectacle');
    $app->get('/soiree/{id}[/]', GetSoireeAPIAction::class)->setName('soiree');

};