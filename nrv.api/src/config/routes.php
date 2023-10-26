<?php
declare(strict_types=1);

use nrv\api\actions\GetSpectaclesAPIAction;
use Slim\App;

return function (App $app):void{

    $app->get('/spectacles/', GetSpectaclesAPIAction::class)->setName('spectacles');

};