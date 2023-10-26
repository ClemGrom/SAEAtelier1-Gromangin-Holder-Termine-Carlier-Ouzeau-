<?php
namespace nrv\api\config\containers;

use nrv\api\services\SoireeServices;
use nrv\api\services\SpectacleServices;
use Psr\Container\ContainerInterface;

return [
        "spectacle.service" => function (ContainerInterface $container) {
            return new SpectacleServices();
        },
        "soiree.service" => function (ContainerInterface $container) {
            return new SoireeServices();
        },
];