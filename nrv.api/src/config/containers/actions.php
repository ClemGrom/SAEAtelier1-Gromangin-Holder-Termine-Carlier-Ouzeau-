<?php

namespace nrv\api\config\containers;

use nrv\api\actions\GetConnexionAction;
use nrv\api\actions\GetDeconnexionAction;
use nrv\api\actions\GetSoireeAPIAction;
use nrv\api\actions\GetSpectacleAPIAction;
use nrv\api\actions\GetSpectaclesAPIAction;
use nrv\api\actions\GetTokenForPostAction;
use nrv\api\actions\PostConnexionAction;
use nrv\api\actions\PostCreationUtilisateurAction;
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
    PostCreationUtilisateurAction::class => function (ContainerInterface $container) {
        return new PostCreationUtilisateurAction(
            $container->get("utilisateur.service"), $container->get("csrf.service")
        );
    },
    GetTokenForPostAction::class => function (ContainerInterface $container) {
        return new GetTokenForPostAction($container->get("csrf.service"));
    },
    PostConnexionAction::class => function (ContainerInterface $container) {
        return new PostConnexionAction($container->get("utilisateur.service"), $container->get("csrf.service"));
    },
    GetDeconnexionAction::class => function (ContainerInterface $container) {
        return new GetDeconnexionAction($container->get("utilisateur.service"));
    },
    GetConnexionAction::class => function (ContainerInterface $container) {
        return new GetConnexionAction($container->get("csrf.service"));
    },
];