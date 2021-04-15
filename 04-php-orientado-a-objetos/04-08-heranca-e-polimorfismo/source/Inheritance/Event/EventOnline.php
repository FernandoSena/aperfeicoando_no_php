<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/04/2021
 * Time: 01:08
 */

namespace Source\Inheritance\Event;


class EventOnline extends Events
{
    private $link;
    
    public function __construct($event, \DateTime $date, $price, $link, $vacancies = null)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    public function register($fullName, $email)
    {
        $this->vacancies +=1;
        $this->setRegister($fullName, $email);
        echo "<p class='trigger accept'>Show {$fullName}, cadastrado com sucesso</p>";
    }
}