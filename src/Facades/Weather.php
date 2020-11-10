<?php
/**
 * Created by PhpStorm.
 * User: fanxinyu
 * Date: 2020-11-10
 * Time: 10:19
 */

namespace Daviswwang\Weather\Facades;

use Illuminate\Support\Facades\Facade;

class Weather extends Facade
{
    /**
     * @method static array getLiveWeather(string $city)
     * @method static array getLongWeather(string $city)
     */
    protected static function getFacadeAccessor()
    {
        return 'weather';
    }
}