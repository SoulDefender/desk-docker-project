<?php


namespace Desk\Estate\Domain\Model;


interface ValueObject
{

    /**
     * @param mixed $other
     * @return boolean
     */
    public function equals($other) : bool;

}
