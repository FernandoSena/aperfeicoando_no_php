<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 13/04/2021
 * Time: 19:00
 */

namespace Source\Interpretatition;


class User
{
    private $firstName;
    private $lastname;
    private $email;

    /**
     * User constructor.
     * @param $firstName
     * @param $lastname
     * @param $email
     */
    public function __construct($firstName, $lastname, $email)
    {
        $this->firstName = $firstName;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function __clone()
    {
        $this->firstName = null;
        $this->lastname = null;
        echo "<p class='trigger'>Clonou!</p>";
    }

    public function __destruct()
    {
        echo "<p class='trigger'>Objeto {$this->firstName} foi destruido!</p>";
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getemail()
    {
        return $this->email;
    }


}