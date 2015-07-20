<?php


namespace Desk\Estate\Domain\Model\CatalogManagement;


use Desk\Estate\Domain\Model\Identifier;
use Desk\Estate\Domain\Model\string;

class OfferId implements Identifier
{

    private $id;

    private function __construct($id) {
        $this->id = $id;
    }

    /**
     * Determine equality with another Identifier
     * @param Identifier $other
     * @return bool
     */
    public function equals(Identifier $other) : bool
    {
        if($other === null) {
            return false;
        }
        return $this->toString() === $other->toString();
    }

    /**
     * Return the Identifier as a string
     * @return string
     */
    public function toString()
    {
        return  $this->id;
    }

    /**
     * Creates an Identifier from a string
     * @param string $id
     * @return Identifier
     */
    public static function fromString(string $id) : OfferId
    {
        return new self($id);
    }
}
