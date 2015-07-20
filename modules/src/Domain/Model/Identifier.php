<?php


namespace Desk\Estate\Domain\Model;


interface Identifier
{

    /**
     * Creates an Identifier from a string
     * @param string $id
     * @return Identifier
     */
    public static function fromString(string $id) : Identifier;

    /**
     * Determine equality with another Identifier
     * @param Identifier $other
     * @return bool
     */
    public function equals(Identifier $other);

    /**
     * Return the Identifier as a string
     * @return string
     */
    public function toString();

}
