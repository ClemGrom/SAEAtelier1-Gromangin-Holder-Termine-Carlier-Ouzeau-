<?php
declare(strict_types=1);
if (isset($_SERVER['HTTP_ORIGIN'])) {
    // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
    // whitelist of safe domains
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

require_once __DIR__ .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . 'src' .
    DIRECTORY_SEPARATOR . 'vendor' .
    DIRECTORY_SEPARATOR . 'autoload.php';


/* application boostrap */
$appli = require_once __DIR__ .
    DIRECTORY_SEPARATOR . '..' .
    DIRECTORY_SEPARATOR . 'src' .
    DIRECTORY_SEPARATOR . 'config' .
    DIRECTORY_SEPARATOR . 'bootstrap.php';


(
    require_once __DIR__ .
        DIRECTORY_SEPARATOR . '..' .
        DIRECTORY_SEPARATOR . 'src' .
        DIRECTORY_SEPARATOR . 'config' .
        DIRECTORY_SEPARATOR . 'routes.php'
)
($appli);

$appli->getBasePath();
$appli->run();
