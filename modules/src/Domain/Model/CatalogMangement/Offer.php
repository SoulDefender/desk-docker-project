<?php


namespace Desk\Estate\Domain\Model\Catalog;


use Desk\Estate\Domain\Model\Entity;
use Desk\Estate\Domain\Model\Identifier;

class Offer implements Entity
{
    private $id;

    private $area;

    private $roomCount;

    private $type;

    private $price;

    private $orderType;

    private $address;

    private $equipments;

    private $images;

    private $landlord;

    private $description;

    private $addedAt;

    private $state;

    private function __construct(int $area,
                                    int $roomCount,
                                    $type,
                                    Price $price,
                                    $orderType,
                                    Address $address,
                                    $equipment,
                                    $images,
                                    $landlord,
                                    $description,
                                    AddedAt $addedAt,
                                    $state)
    {
        $this->area = $area;
        $this->roomCount = $roomCount;
        $this->type = $type;
        $this->price = $price;
        $this->orderType;
        $this->address = $address;
        $this->equipments = $equipment;
        $this->images = $images;
        $this->landlord = $landlord;
        $this->description = $description;
        $this->addedAt = $addedAt;
        $this->state = $state;
    }

    public function id() : Identifier{
        return Identifier::fromString($this->id);
    }
}