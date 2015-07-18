<?php


namespace Desk\Estate\Domain\Model\People;

use Assert\Assertion;
use Desk\Estate\Domain\Model\ValueObject;

class FirstName implements ValueObject
{

    /**
     * @var string
     */
    private $value;


    private function __construct(string $value) {
        Assertion::regex($value, '/^[\pL-]+$/u');
        $this->value = $value;
    }

    public static function fromString(string $value) {
        return new FirstName($value);
    }

    public function firstName(): string {
        return $this->value;
    }

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other) : bool
    {
        if(!$other instanceof FirstName) {
            return false;
        }

        if ($other === null) {
            return false;
        }
        if ($other === $this) {
            return true;
        }
        return strcmp($this->value, $other->value);
    }
}