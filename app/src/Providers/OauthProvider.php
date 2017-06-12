<?php
namespace Laraxedro\Providers;

use Exedra\Application;
use Exedra\Contracts\Provider\Provider;
use Laraxedro\Oauth\OauthRepository;
use Laraxedro\UserRepository;
use League\OAuth2\Server\AuthorizationServer;
use League\OAuth2\Server\Grant\ClientCredentialsGrant;
use League\OAuth2\Server\Grant\PasswordGrant;

class OauthProvider implements Provider
{
    public function register(Application $app)
    {
        // services registry
        $app['service']->set(OauthRepository::class, function() {
            return new OauthRepository();
        });

        $app['service']->set('@'.AuthorizationServer::class, function() {
            /** @var \Exedra\Path $path */
            $path = $this->path->create('keys');

            /** @var OauthRepository $oauthRepository */
            $oauthRepository = $this->get(OauthRepository::class);

            $server = new AuthorizationServer($oauthRepository, $oauthRepository, $oauthRepository, $path->to('pri.key'), $path->to('pub.key'));

            $server->enableGrantType(new ClientCredentialsGrant(), new \DateInterval('P2Y'));

            $server->enableGrantType(new PasswordGrant(new UserRepository(), $oauthRepository));

            return $server;
        });
    }
}