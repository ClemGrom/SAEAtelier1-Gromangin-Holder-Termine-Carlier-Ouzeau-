<?php

namespace nrv\api\config\containers;

use nrv\api\services\CommandeServices;
use nrv\api\services\SoireeServices;
use nrv\api\services\SpectacleServices;
use nrv\api\services\UtilisateurServices;
use Psr\Container\ContainerInterface;

return [
        "spectacle.service" => function (ContainerInterface $container) {
            return new SpectacleServices();
        },
        "soiree.service" => function (ContainerInterface $container) {
            return new SoireeServices();
        },
        "commande.service" => function (ContainerInterface $container) {
            return new CommandeServices();
        },
        "utilisateur.service" => function (ContainerInterface $container) {
            return new UtilisateurServices();
        },
];