<?php

namespace Source\Related;


class User
{
    private $job;
    private $firstName;
    private $lastname;

    /**
     * User constructor.
     * @param $job
     * @param $firstName
     * @param $lastname
     */
    public function __construct($job, $firstName, $lastname)
    {
        $this->job = $job;
        $this->firstName = $firstName;
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
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
}