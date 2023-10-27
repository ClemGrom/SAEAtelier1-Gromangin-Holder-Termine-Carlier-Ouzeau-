<?php

namespace nrv\api\config\containers;

use nrv\api\actions\GetLieuAPIAction;
use nrv\api\actions\GetLieuxAPIAction;
use nrv\api\actions\GetSoireeAPIAction;
use nrv\api\actions\GetSpectacleAPIAction;
use nrv\api\actions\GetSpectaclesAPIAction;
use Psr\Container\ContainerInterface;

return [
        GetSoireeAPIAction::class => function (ContainerInterface $container) {
            return new GetSoireeAPIAction($container->get("soiree.service"));
        },
        GetSpectacleAPIAction::class => function (ContainerInterface $container) {
            return new GetSpectacleAPIAction($container->get("spectacle.service"));
        },
        GetSpectaclesAPIAction::class => function (ContainerInterface $container) {
            return new GetSpectaclesAPIAction($container->get("spectacle.service"));
        },

        GetLieuxAPIAction::class => function (ContainerInterface $container) {
            return new GetLieuxAPIAction($container->get("lieu.service"));
        },
        GetLieuAPIAction::class => function (ContainerInterface $container) {
            return new GetLieuAPIAction($container->get("lieu.service"));
        },

];