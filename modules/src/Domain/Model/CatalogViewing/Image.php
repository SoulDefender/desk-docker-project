<?php


namespace Desk\Estate\Domain\Model\CatalogViewing;


use Assert\Assertion;
use Desk\Estate\Domain\Model\bool;
use Desk\Estate\Domain\Model\ValueObject;

class Image implements ValueObject
{

    private $path;

    /**
     * @param string $path
     */
    private function __construct(string $path) {
        $this->path = $path;
    }

    /**
     * @param string $path
     * @return Image
     */
    public static function fromString(string $path) {
        Assertion::file($path);
        return new self($path);
    }

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other) : bool
    {
        if($other === null) {
            return false;
        }
        if($this === $other) {
            return true;
        }
        if(!$other instanceof self || strcmp($this->path, $other->path) != 0) {
            return false;
        }
        return true;
    }

    public function toString(): string {
        return $this->path;
    }

    public function __toString(): string {
        return $this->path;
    }
}
