<?php


namespace Desk\Estate\Domain\Model\People;


use Assert\Assertion;
use Desk\Estate\Domain\Model\ValueObject;

class LastName implements ValueObject
{
    /**
     * @var string
     */
    private $value;


    private function __construct(string $value) {
        Assertion::regex($value, '/^[\pL-]+$/u');
        $this->value = $value;
    }

    /**
     * Create new LastName from string
     * @param string $value
     * @return LastName
     */
    public static function fromString(string $value) {
        return new LastName($value);
    }


    public function lastName(): string {
        return $this->value;
    }

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other) : bool
    {
        if ( ! $other instanceof LastName) {
            return false;
        }

        if ($other === $this) {
            return true;
        }
        return $this->value === $other->value;
    }
}
