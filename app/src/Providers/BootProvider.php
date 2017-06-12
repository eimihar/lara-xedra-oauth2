<?php
namespace Laraxedro\Providers;

use Exedra\Application;
use Exedra\Contracts\Provider\Provider;
use Franzl\Middleware\Whoops\Middleware;

class BootProvider implements Provider
{
    public function register(Application $app)
    {
        $app->provider->add(\Laraxedro\Providers\EloquentProvider::class);

        $app->map->middleware(new \Exedra\Support\Psr7\BridgeMiddleware(array(
            new Middleware()
        )));
    }
}