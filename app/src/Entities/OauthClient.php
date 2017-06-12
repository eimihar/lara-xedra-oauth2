<?php
namespace Laraxedro\Entities;

use Laraquent\Base;
use League\OAuth2\Server\Entities\ClientEntityInterface;

class OauthClient extends Base implements ClientEntityInterface
{
    protected $table = 'oauth_client';

    /**
     * Get the client's identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    /**
     * Get the client's name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the registered redirect URI (as a string).
     *
     * Alternatively return an indexed array of redirect URIs.
     *
     * @return string|string[]
     */
    public function getRedirectUri()
    {
        // TODO: Implement getRedirectUri() method.
    }
}