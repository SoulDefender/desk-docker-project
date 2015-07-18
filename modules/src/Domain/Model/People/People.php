<?php

namespace Desk\Estate\Domain\Model\People;


use Desk\Estate\Domain\Model\Entity;
use Desk\Estate\Domain\Model\Identifier;

/**
 * Class represents people
 * @package Desk\Estate\Domain\Model\People
 */
class People implements Entity
{

    private $id;

    /**
     * @var array
     */
    private $contacts;

    /**
     * @var FirstName
     */
    private $firstName;

    /**
     * @var LastName
     */
    private $lastName;

    public function __construct($id, FirstName $firstName, LastName $lastName, Contact $contact) {
        $this->id = $id;
        $this->contacts[] = $contact;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @return FirstName
     */
    public function getFirstName()
    {
        return $this->firstName->firstName();
    }

    /**
     * @return LastName
     */
    public function getLastName()
    {
        return $this->lastName->lastName();
    }


    public function addContact(Contact $contact) {
        $this->contacts[] = $contact;
    }

    /**
     * Return the Entity identifier
     * @return Identifier
     */
    public function id() : Identifier {
        return Identifier::fromString($this->id);
    }
}
