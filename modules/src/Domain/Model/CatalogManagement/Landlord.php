<?php

namespace Desk\Estate\Domain\Model\Catalog;


use Desk\Estate\Domain\Model\CatalogManagement\LandlordId;
use Desk\Estate\Domain\Model\Entity;
use Desk\Estate\Domain\Model\People\Contact;

class Landlord implements Entity
{
    /**
     * @var string
     */
    private $id;
    private $name;
    private $contacts;

    public function __construct(LandlordId $id, string $name, Contact $contact) {
        $this->id = $id->toString();
        $this->name = $name;
        $this->contacts[] = $contact;
    }

    /**
     * @return LandlordId
     */
    public function id() : LandlordId
    {
        return LandlordId::fromString($this->id);
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
