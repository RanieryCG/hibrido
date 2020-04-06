<?php

namespace Aplicacao\Core;

use Illuminate\Database\Capsule\Manager as Capsule; 

class Database
{
    public function __construct()
    {
        $capsule = new Capsule();
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => 'db',
            'username' => 'root',
            'password' => 'hibrido',
            'database' => 'hibrido',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'      => '',
            'strict' => false,
            'engine' => null,
        ]);
        $capsule->bootEloquent();
    }
}