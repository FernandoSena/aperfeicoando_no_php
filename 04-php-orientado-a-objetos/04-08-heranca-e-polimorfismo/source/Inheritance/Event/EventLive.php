<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 01:04
 */

namespace Source\Inheritance\Event;


use Source\Inheritance\Address;

class EventLive extends Events
{
    /**
     * @var Address
     */
    private $address;

    public function __construct($event, \DateTime $date, $price, $vacancies, Address $address)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
}