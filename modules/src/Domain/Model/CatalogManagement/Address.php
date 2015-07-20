<?php

namespace Desk\Estate\Domain\Model\Catalog;

use Assert\Assertion;
use Desk\Estate\Domain\Model\ValueObject;

class Address implements ValueObject
{
    private $country;
    private $region;
    private $city;
    private $street;
    private $house;

    private function __construct(string $country,
                                 string $region,
                                 string $city,
                                 string $street,
                                 string $house)
    {
        $this->country = $country;
        $this->region = $region;
        $this->city = $city;
        $this->street = $street;
        $this->house = $house;
    }

    public static function fromString(string $country,
                                      string $region,
                                      string $city,
                                      string $street,
                                      string $house)
    {
        if(preg_match('/\w+-/', $country) !== null &&
            preg_match('/\w+-/', $region) !== null &&
            preg_match('/\w+-/', $city) !== null &&
            preg_match('/\w+-/', $street) !== null &&
            preg_match('/\d+\/\\/', $house) !== null)
        {
            return new self($country,$region,$city,$street,$house);
        }
        throw new \Exception("Invalid Address");
    }

    public function equals($other){
        if(!$other instanceof self
        || $this->country !== $other->country
        || $this->region !== $other->region
        || $this->city !== $other->city
        || $this->street !== $other->street
        || $this->house !== $other->house){
            return false;
        }
        return true;
    }
}