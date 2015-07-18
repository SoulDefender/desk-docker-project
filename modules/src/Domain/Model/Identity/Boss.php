<?php


namespace Desk\Estate\Domain\Model\Identity;


use Desk\Estate\Domain\Model\People\Contact;
use Desk\Estate\Domain\Model\People\FirstName;
use Desk\Estate\Domain\Model\People\LastName;
use Desk\Estate\Domain\Model\People\People;

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
                                string $login,
                                string $password){
        parent::__construct($id,$firstName,$lastName,$contact);
        $this->login = $login;
        $this->password = $password;
    }
}