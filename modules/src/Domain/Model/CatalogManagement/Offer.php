<?php


namespace Desk\Estate\Domain\Model\Catalog;


use Desk\Estate\Domain\Model\CatalogManagement\OfferId;
use Desk\Estate\Domain\Model\CatalogViewing\Image;
use Desk\Estate\Domain\Model\Entity;

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

    /**
     * @param int $area
     * @param int $roomCount
     * @param $type
     * @param Price $price
     * @param $orderType
     * @param Address $address
     * @param $equipment
     * @param $images
     * @param $landlord
     * @param $description
     * @param AddedAt $addedAt
     * @param $state
     */
    private function __construct(
        OfferId $id,
        int $area,
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
        $state
    )
    {
        $this->id = $id->toString();
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
        $this->addedAt = $addedAt->toString();
        $this->state = $state;
    }

    /**
     * @param int $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @param int $roomCount
     */
    public function setRoomCount($roomCount)
    {
        $this->roomCount = $roomCount;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param Price $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $orderType
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
    }

    /**
     * @param Address $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $equipments
     */
    public function setEquipments($equipments)
    {
        $this->equipments = $equipments;
    }

    /**
     * @param array $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @param Image $image
     */
    public function addImage(Image $image)
    {
        $this->images[] = $image;
    }

    /**
     * @param mixed $landlord
     */
    public function setLandlord($landlord)
    {
        $this->landlord = $landlord;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param AddedAt $addedAt
     */
    public function setAddedAt($addedAt)
    {
        $this->addedAt = $addedAt;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return OfferId
     */
    public function id() : OfferId{
        return OfferId::fromString($this->id);
    }

    /**
     * @return int
     */
    public function area()
    {
        return $this->area;
    }

    /**
     * @return int
     */
    public function roomCount()
    {
        return $this->roomCount;
    }

    /**
     * @return mixed
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * @return Price
     */
    public function price()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function orderType()
    {
        return $this->orderType;
    }

    /**
     * @return Address
     */
    public function address()
    {
        return $this->address;
    }

    /**
     * @return array
     */
    public function equipments()
    {
        return $this->equipments;
    }

    /**
     * @return array
     */
    public function images()
    {
        return $this->images;
    }

    /**
     * @return Landlord
     */
    public function landlord()
    {
        return $this->landlord;
    }

    /**
     * @return string
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * @return AddedAt
     */
    public function addedAt()
    {
        return AddedAt::fromString($this->addedAt);
    }

    /**
     * @return mixed
     */
    public function state()
    {
        return $this->state;
    }

}
