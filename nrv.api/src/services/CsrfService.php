<?php

namespace nrv\api\services;

use Exception;

class CsrfService
{

    const generation = ['abcdefghijklmnopqrstuvwxyz', '0123456789', '?,.;/:!$%*&#([-_^@)]=}{'];
    const lengthPassword = 15;

    public static function generate(): string
    {
        $mdp = "";
        for ($i = 0; $i < self::lengthPassword; $i++) {
            $type = self::generation[rand(0, 2)];
            $mdp .= $type[rand(0, strlen($type) - 1)];
        }
        $_SESSION["token"] = $mdp;
        return $mdp;
    }

    public static function check($token): void
    {
        $tokenSessions = $_SESSION["token"];
        unset($_SESSION["token"]);
        if ($tokenSessions != $token) {
            throw new Exception("The token is invalid");
        }
    }

}
