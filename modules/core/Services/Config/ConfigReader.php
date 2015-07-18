<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 10.07.15
 * Time: 17:36
 */

namespace Desk\Core\Services\Config;


interface ConfigReader {
    public function get($property = null);
    public function has($property);
}