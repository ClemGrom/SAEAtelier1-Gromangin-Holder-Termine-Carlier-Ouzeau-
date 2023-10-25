<?php

namespace nrv\api\conf;

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addRoutingMiddleware();
$app->setBasePath("/api");
$app->addErrorMiddleware(true, false, false);

define("nrv\api\conf\basePath", $app->getBasePath());

return $app;