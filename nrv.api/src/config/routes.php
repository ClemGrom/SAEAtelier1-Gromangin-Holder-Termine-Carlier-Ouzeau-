<?php

use nrv\api\actions\GetSoireeAPIAction;
use nrv\api\actions\GetSoireesAPIAction;
use nrv\api\actions\GetSpectacleAPIAction;
use nrv\api\actions\GetSpectaclesAPIAction;
use Slim\App;

return function (App $app): void {

    $app->get('/spectacles[/]', GetSpectaclesAPIAction::class)->setName('spectacles');
    $app->get('/spectacle/{id}[/]', GetSpectacleAPIAction::class)->setName('spectacle');
    $app->get('/soiree/{id}[/]', GetSoireeAPIAction::class)->setName('soiree');
    $app->get('/soirees[/]', GetSoireesAPIAction::class)->setName('soirees');

};