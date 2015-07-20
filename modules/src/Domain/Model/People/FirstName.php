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

    /**
     * @param string $svalue
     */
    private function __construct(string $value) {
        Assertion::regex($value, '/^[\pL-]+$/u');
        $this->value = $value;
    }

    /**
     * @param string $value
     * @return FirstName
     */
    public static function fromString(string $value) : FirstName {
        return new FirstName($value);
    }

    /**
     * @return string
     */
    public function firstName(): string {
        return $this->value;
    }

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other) : bool
    {
        if ( ! $other instanceof FirstName) {
            return false;
        }

        if ($other === $this) {
            return true;
        }

        return $this->value === $other->value;
    }
}
