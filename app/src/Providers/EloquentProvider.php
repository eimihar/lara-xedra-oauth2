<?php
namespace Laraxedro\Providers;

use Exedra\Application;

class EloquentProvider implements \Exedra\Contracts\Provider\Provider
{
    public function register(Application $app)
    {
        $config = $app->config;

        $capsule = new \Illuminate\Database\Capsule\Manager;

        $capsule->addConnection(array(
            'driver' => $config->get('db.driver', 'mysql'),
            'host' => $config->get('db.host', 'localhost'),
            'database' => $config->get('db.name'),
            'username' => $config->get('db.user'),
            'password' => $config->get('db.pass'),
            'charset' => $config->get('db.charset', 'utf8'),
            'collation' => $config->get('db.collation', 'utf8_unicode_ci')
        ));

        $capsule->setAsGlobal();

        $capsule->bootEloquent();

        // register eloquent
        $app->eloquent = $capsule;
    }
}