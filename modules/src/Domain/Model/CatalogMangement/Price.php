<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 15.07.15
 * Time: 18:08
 */

namespace Desk\Estate\Domain\Model\Catalog;


use Desk\Estate\Domain\Model\ValueObject;

class Price implements ValueObject
{
    private $money;

    private $currency;

    private function __construct(int $money, string $currency){
        $this->money = $money;
        $this->currency = $currency;
    }

    public static function fromString($money, $currency){
        if(preg_match('/\d+./',$money) !== null){
            return new self($money, $currency);
        }
        throw new \Exception("Money isn't valid");
    }

    public function equals($other){
        if(!$other instanceof Self
            || $this->money !== $other->money
            || $this->currency !== $other->currency){
            return false;
        }
        return true;
    }
}
