<?php


namespace Desk\Estate\Domain\Model\StuffManagement;


use Assert\Assertion;
use Desk\Estate\Domain\Model\ValueObject;

class Login implements ValueObject
{
    /**
     * Login
     * @var string
     */
    private $value;

    private function __construct(string $value)
    {
        Assertion::minLength($value, 6);
        Assertion::regex($value, '/^[\pL\pN\pM]+$/');
        $this->value = $value;
    }

    /**
     * Create password from string
     * @param string $value
     * @return Login
     */
    public static function fromString(string $value)
    {
        return new Login($value);
    }

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other): bool
    {
        if ( ! $other instanceof Login) {
            return false;
        }

        if ($other === $this) {
            return true;
        }

        return $this->value === $other->value;
    }
}
