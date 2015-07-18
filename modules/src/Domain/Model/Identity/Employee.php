<?php


namespace Desk\Estate\Domain\Model\Identity;


use Desk\Estate\Domain\Model\People\Email;

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
                                string $login,
                                string $password,
                                Email $email){
        parent::__construct($id,$firstName,$lastName,$contact,$login,$password);
        $this->email = $email;
        $this->isActive = true;
    }
}