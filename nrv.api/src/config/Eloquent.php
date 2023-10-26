<?php

namespace nrv\api\config;

use Illuminate\Database\Capsule\Manager as DB;

class Eloquent
{
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function init($filename) {
        $this->db->addConnection(parse_ini_file($filename));
        $this->db->bootEloquent();
        $this->db->setAsGlobal();
    }
}