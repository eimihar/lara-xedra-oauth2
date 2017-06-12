<?php
namespace Laraxedro\Entities;

use Laraquent\Base;
use League\OAuth2\Server\Entities\UserEntityInterface;

class User extends Base  implements UserEntityInterface
{
    protected $table = 'user';

    /**
     * Return the user's identifier.
     *
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->id;
    }
}