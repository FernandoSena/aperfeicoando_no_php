<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 12:41
 */

namespace Source\Contracts;

interface UserErrorInterface
{
    public function setError($error);

    public function getError();
}