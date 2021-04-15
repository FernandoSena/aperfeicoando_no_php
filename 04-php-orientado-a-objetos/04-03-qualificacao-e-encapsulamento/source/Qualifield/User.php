<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 13/04/2021
 * Time: 15:38
 */

namespace Source\Qualifield;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    private $erro;

    public function setUser($firstname, $lastName, $email)
    {
        $this->setFirstName($firstname);
        $this->setLastName($lastName);

        if(!$this->setEmail($email)){
            $this->erro = "O e-mail {$this->getEmail()} não é válido";
            return false;
        }
        return true;
    }

    /**
     * @return mixed
     */
    public function getErro()
    {
        return $this->erro;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $firstName
     */
    private function setFirstName($firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param $lastName
     */
    private function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Valida o e-mail do usuário em um formato válido
     * @param $email
     * @return bool
     */
    private function setEmail($email)
    {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
}