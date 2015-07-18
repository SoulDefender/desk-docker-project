<?php


namespace Desk\Estate\Domain\Model\People;

use Assert\Assertion;
use Desk\Estate\Domain\Model\ValueObject;

/**
 * Class represents phone number
 * @package Desk\Estate\Domain\Model\People
 */
class Phone implements ValueObject, Contact
{

    /**
     * @var string
     */
    private $value;

    private function __construct(string $phone) {
        Assertion::regex($phone, '/^+?[\pN]{,12}$/');
        $this->value = $phone;
    }

    /**
     * @param string $phone
     */
    public static function fromString(string $phone) {
        return new Phone($phone);
    }

    /**
     * @return string
     */
    public function phone() {
        return $this->value;
    }

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other) : bool
    {
        if(!$other instanceof Phone) {
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
