<?php
namespace Laraxedro\Controllers;

use Exedra\Runtime\Context;
use Exedron\Routeller\Controller\Controller;
use League\OAuth2\Server\AuthorizationServer;

class OauthController extends Controller
{
    public function middleware(Context $context)
    {
        try {
            return $context->next($context);
        } catch(\Exception $exception) {
            return json_encode(array(
                'error' => array(
                    'class' => get_class($exception),
                    'message' => $exception->getMessage()
                )
            ));
        }
    }

    /**
     * @inject League\OAuth2\Server\AuthorizationServer, request, response
     * @path /access_token
     */
    public function post(AuthorizationServer $server, $request, $response)
    {
        return $server->respondToAccessTokenRequest($request, $response);
    }
}