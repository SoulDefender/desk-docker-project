<?php


namespace Desk\Estate\Domain\Model;


interface Entity
{

    /**
     * Return the Entity identifier
     * @return Identifier
     */
    public function id() : Identifier;

}
