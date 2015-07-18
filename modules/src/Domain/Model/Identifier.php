<?php


namespace Desk\Estate\Domain\Model;


interface Identifier
{

    /**
     * Create a new Identifier
     * @return Identifier
     */
    public static function generate();

    /**
     * Creates an Identifier from a string
     * @param $string
     * @return Identifier
     */
    public static function fromString(string $string);

    /**
     * Determine equality with another Identifier
     * @return bool
     */
    public function equals();

    /**
     * Return the Identifier as a string
     * @return string
     */
    public function toString();

}
