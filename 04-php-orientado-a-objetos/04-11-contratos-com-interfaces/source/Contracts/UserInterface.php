<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 12:33
 */

namespace Source\Contracts;

interface UserInterface
{
    //public function __construct($firstName, $lastName, $email);

    //public function setEmail($email);

    public function getFirstName();

    public function getLastName();

    public function getEmail();
}