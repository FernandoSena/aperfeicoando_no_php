<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 13:15
 */

namespace Source\Traits;


trait UserTrait
{
    private $user;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

}