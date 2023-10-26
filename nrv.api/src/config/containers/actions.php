<?php

namespace nrv\api\config\containers;

use nrv\api\actions\GetSoireeAPIAction;
use nrv\api\actions\GetSpectacleAPIAction;
use nrv\api\actions\GetSpectaclesAPIAction;
use nrv\api\actions\PostCreationUtilisateurAPIAction;
use nrv\api\actions\GetTokenForPostAPIAction;
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
        GetTokenForPostAPIAction::class => function (ContainerInterface $container) {
            return new GetTokenForPostAPIAction($container->get("csrf.service"));
        },
];