<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 13:17
 */

namespace Source\Traits;


class Register
{
    use UserTrait;
    use AddressTrait;

    public function __construct(User $user, Address $address)
    {
        $this->setUser($user);
        $this->setAddress($address);
        $this->save();
    }

    private function save(){
        $this->user->id = 232;
        $this->address->user_id = $this->user->id ;
    }
}