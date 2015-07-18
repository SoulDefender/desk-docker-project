<?php


namespace Desk\Estate\Domain\Model\Identity;


use Desk\Estate\Domain\Model\People\Contact;
use Desk\Estate\Domain\Model\People\FirstName;
use Desk\Estate\Domain\Model\People\LastName;
use Desk\Estate\Domain\Model\People\People;
use Desk\Estate\Domain\Model\StuffManagement\Login;
use Desk\Estate\Domain\Model\StuffManagement\Password;

/**
 * Class Boss
 * Class that represents super-user
 * @package Desk\Estate\Domain\Model\Identity
 */
class Boss extends People
{
    private $login;

    private $password;

    public function __construct($id, FirstName $firstName,
                                LastName $lastName,
                                Contact $contact,
                                Login $login,
                                Password $password){
        parent::__construct($id,$firstName,$lastName,$contact);
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function login()
    {
        return Login::fromString($this->login);
    }

    /**
     * @param Login $login
     */
    public function setLogin(Login $login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function password()
    {
        return Password::fromString($this->password);
    }

    /**
     * @param Password $password
     */
    public function setPassword(Password $password)
    {
        $this->password = $password;
    }

}
