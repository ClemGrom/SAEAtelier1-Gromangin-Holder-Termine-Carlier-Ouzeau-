<?php

namespace nrv\api\config;

use DI\Bridge\Slim\Bridge;
use Slim\Factory\AppFactory;

//importation settings conteneurs dans variable
$dependencies = require __DIR__ . DIRECTORY_SEPARATOR . "containers" . DIRECTORY_SEPARATOR . "dependencies.php";
$actions = require __DIR__ . DIRECTORY_SEPARATOR . "containers" . DIRECTORY_SEPARATOR . "actions.php";

//Création builder de container et build
$builder = new \DI\ContainerBuilder();
$builder->addDefinitions($dependencies);
$builder->addDefinitions($actions);

$container = $builder->build();

//Création app slim depuis container
$app = Bridge::create($container);

//Ajout middleware
$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();

//Gestionnaire d'erreur
$errorMiddleware = $app->addErrorMiddleware(true, false, false);
$errorHandler = $errorMiddleware->getDefaultErrorHandler();
$errorHandler->forceContentType('application/json');

//Initialisation Eloquent
$init = new Eloquent();
$init->init(__DIR__ . DIRECTORY_SEPARATOR . 'nrv.db.ini');


return $app;