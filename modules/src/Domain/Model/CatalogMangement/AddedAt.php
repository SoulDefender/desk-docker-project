<?php

namespace Desk\Estate\Domain\Model\Catalog;


use Desk\Estate\Domain\Model\ValueObject;

class AddedAt implements ValueObject
{
    private $day;
    private $month;
    private $year;
    private $hour;
    private $minute;

    /**
     * @param int $day
     * @param int $month
     * @param int $year
     * @param int $hour
     * @param int $minute
     */
    private function __construct(int $day, int $month, int $year, int $hour, int $minute){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->hour = $hour;
        $this->minute = $minute;
    }

    public static function fromString(string $addedAt){
        $date = explode('.', $addedAt);
        $time = explode(':', $date[3]);
        if(preg_match('/\d+/', $date[0]) !== null &&
            preg_match('/\d+/', $date[1]) !== null &&
            preg_match('/\d+/', $date[2]) !== null &&
            preg_match('/\d+/', $time[0]) !== null &&
            preg_match('/\d+\/', $time[1]) !== null)
        {
            return new self($date[0], $date[1], $date[2], $time[0], $time[1]);
        }
        throw new \Exception('Invalid Date');
    }

    public function toString() {
        return $this->day . '.' . $this->month . '.' . $this->year . '.' .  $this->hour. ':' . $this->minute;
    }

    public function __toString() {
        return $this->day . '.' . $this->month . '.' . $this->year . '.' .  $this->hour. ':' . $this->minute;
    }

    public function equals($other): bool {
        if($other === null) {
            return false;
        }
        if(!$other instanceof AddedAt) {
            return false;
        }
        if($other == $this) {
            return true;
        }
        if($this->day != $other->day || $this->month != $other->month ||
            $this->year != $other->year || $this->hour != $other->hour ||
            $this->minute != $other->minute) {
            return false;
        }
        return true;
    }
}