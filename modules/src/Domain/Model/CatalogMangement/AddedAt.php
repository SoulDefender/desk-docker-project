<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 15.07.15
 * Time: 20:03
 */

namespace Desk\Estate\Domain\Model\Catalog;


use Desk\Estate\Domain\Model\ValueObject;

class AddedAt implements ValueObject
{
    private $day;
    private $month;
    private $year;
    private $hour;
    private $minute;

    private function __construct(int $day, int $month, int $year, int $hour, int $minute){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->hour = $hour;
        $this->minute = $minute;
    }

    public static function fromString(string $addedAt){
        $date = explode('.', $addedAt);
        $time = explode(':', $date[4]);
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

    public function equals($other){

    }
}