<?php
namespace Laraxedro\Oauth;

use League\OAuth2\Server\CryptKey;
use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\ScopeEntityInterface;

class AccessToken implements AccessTokenEntityInterface
{
    /**
     * Generate a JWT from the access token
     *
     * @param CryptKey $privateKey
     *
     * @return string
     */
    public function convertToJWT(CryptKey $privateKey)
    {
        // TODO: Implement convertToJWT() method.
    }

    /**
     * Get the token's identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        // TODO: Implement getIdentifier() method.
    }

    /**
     * Set the token's identifier.
     *
     * @param $identifier
     */
    public function setIdentifier($identifier)
    {
        // TODO: Implement setIdentifier() method.
    }

    /**
     * Get the token's expiry date time.
     *
     * @return \DateTime
     */
    public function getExpiryDateTime()
    {
        // TODO: Implement getExpiryDateTime() method.
    }

    /**
     * Set the date time when the token expires.
     *
     * @param \DateTime $dateTime
     */
    public function setExpiryDateTime(\DateTime $dateTime)
    {
        // TODO: Implement setExpiryDateTime() method.
    }

    /**
     * Set the identifier of the user associated with the token.
     *
     * @param string|int $identifier The identifier of the user
     */
    public function setUserIdentifier($identifier)
    {
        // TODO: Implement setUserIdentifier() method.
    }

    /**
     * Get the token user's identifier.
     *
     * @return string|int
     */
    public function getUserIdentifier()
    {
        // TODO: Implement getUserIdentifier() method.
    }

    /**
     * Get the client that the token was issued to.
     *
     * @return ClientEntityInterface
     */
    public function getClient()
    {
        // TODO: Implement getClient() method.
    }

    /**
     * Set the client that the token was issued to.
     *
     * @param ClientEntityInterface $client
     */
    public function setClient(ClientEntityInterface $client)
    {
        // TODO: Implement setClient() method.
    }

    /**
     * Associate a scope with the token.
     *
     * @param ScopeEntityInterface $scope
     */
    public function addScope(ScopeEntityInterface $scope)
    {
        // TODO: Implement addScope() method.
    }

    /**
     * Return an array of scopes associated with the token.
     *
     * @return ScopeEntityInterface[]
     */
    public function getScopes()
    {
        // TODO: Implement getScopes() method.
    }
}