<?php
/**
 * Created by PhpStorm.
 * User: fanxinyu
 * Date: 2020-11-10
 * Time: 13:15
 */

namespace Daviswwang\Weather\Support;

use ArrayAccess;
use Daviswwang\Weather\Contracts\Repository as WeatherContract;
use Daviswwang\Weather\Weather;

class Repository implements WeatherContract, ArrayAccess
{
    protected $instance;

    public function __construct(Weather $weather)
    {
        $this->instance = $weather;
    }

    public function getLiveWeather($city)
    {
        // TODO: Implement get() method.
        return $this->instance->getLiveWeather($city);
    }

    public function getLongWeather($city)
    {
        return $this->instance->getLongWeather($city);
    }


    public function offsetExists($offset)
    {

    }

    public function offsetGet($offset)
    {

    }

    public function offsetSet($offset, $value)
    {

    }

    public function offsetUnset($offset)
    {

    }
}