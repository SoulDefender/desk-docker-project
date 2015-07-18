<?php


namespace Desk\Estate\Domain\Model\People;


use Assert\Assertion;
use Desk\Estate\Domain\Model\ValueObject;

class Email implements ValueObject, Contact
{

    /**
     * @var string
     */
    private $value;

    private function __construct(string $email) {
        Assertion::email($email);
        $this->value = $email;
    }

    /**
     * @param string $email
     */
    public static function fromString(string $email) {
        return new Email($email);
    }

    /**
     * @return string
     */
    public function email() {
        return $this->value;
    }

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other) : bool
    {
        if(!$other instanceof Email) {
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
