<?php
use Laraxedro\Oauth\OauthService;
use League\OAuth2\Server\AuthorizationServer;

require_once __DIR__ . '/vendor/autoload.php';

\Exedra\Support\Autoloader::getInstance()->autoloadPsr4('Laraxedro', __DIR__.'/app/src');

$app = new Exedra\Application(__DIR__);

$app->config->set('db', array(
    'host' => 'localhost',
    'name' => 'laraxedro',
    'user' => 'root',
    'password' => ''
));

$app->provider->add(Laraxedro\Providers\BootProvider::class);
$app->provider->add(Laraxedro\Providers\OauthProvider::class);
$app->provider->add(Exedron\Routeller\Provider::class);

$app->map['oauth']->any('/oauth')->group(\Laraxedro\Controllers\OauthController::class);

return $app;