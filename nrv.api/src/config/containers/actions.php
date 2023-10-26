<?php

namespace nrv\api\config\containers;

use nrv\api\actions\GetSoireeAPIAction;
use nrv\api\actions\GetSpectacleAPIAction;
use nrv\api\actions\GetSpectaclesAPIAction;
use nrv\api\actions\PostCreationUtilisateurAPIAction;
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
        PostCreationUtilisateurAPIAction::class => function (ContainerInterface $container) {
            return new PostCreationUtilisateurAPIAction($container->get("utilisateur.service"));
        },
];