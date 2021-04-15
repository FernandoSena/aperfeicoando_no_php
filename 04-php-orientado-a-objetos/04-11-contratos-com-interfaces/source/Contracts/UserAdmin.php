<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 12:43
 */

namespace Source\Contracts;


class UserAdmin extends User implements UserInterface, UserErrorInterface
{
    private $level;
    private $error;

    public function __construct($firstName, $lastName, $email)
    {
        parent::__construct($firstName, $lastName, $email);
        $this->level = 10;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }
}