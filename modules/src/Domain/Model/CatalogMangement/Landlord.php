<?php

namespace Desk\Estate\Domain\Model\Catalog;


use Desk\Estate\Domain\Model\Entity;
use Desk\Estate\Domain\Model\Identifier;
use Desk\Estate\Domain\Model\People\Contact;

class Landlord implements Entity
{
    /**
     * @var string
     */
    private $id;
    private $name;
    private $contacts;

    public function __construct(Identifier $id, string $name, Contact $contact) {
        $this->id = $id->toString();
        $this->name = $name;
        $this->contacts[] = $contact;
    }

    /**
     * @return Identifier
     */
    public function id()
    {
        return Identifier::fromString($this->id);
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function contacts()
    {
        return $this->contacts;
    }


}
