<?php
declare(strict_types=1);

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