<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 13:16
 */

namespace Source\Traits;


trait AddressTrait
{
    private $address;

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
    }
}