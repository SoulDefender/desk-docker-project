<?php


namespace Desk\Estate\Domain\Model\Identity;


use Desk\Estate\Domain\Model\People\Contact;
use Desk\Estate\Domain\Model\People\Email;
use Desk\Estate\Domain\Model\People\FirstName;
use Desk\Estate\Domain\Model\People\LastName;
use Desk\Estate\Domain\Model\StuffManagement\Login;
use Desk\Estate\Domain\Model\StuffManagement\Password;

/**
 * Class Employee
 * Represents employee
 * @package Desk\Estate\Domain\Model\Identity
 */
class Employee extends Boss
{
    private $email;

    private $isActive;

    public function __construct($id, FirstName $firstName,
                                LastName $lastName,
                                Contact $contact,
                                Login $login,
                                Password $password,
                                Email $email){
        parent::__construct($id,$firstName,$lastName,$contact,$login,$password);
        $this->email = $email;
        $this->isActive = true;
    }
}
