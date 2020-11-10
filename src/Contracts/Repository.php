<?php
/**
 * Created by PhpStorm.
 * User: fanxinyu
 * Date: 2020-11-10
 * Time: 11:27
 */

namespace Daviswwang\Weather\Contracts;

interface Repository
{
    public function getLiveWeather($city);

    public function getLongWeather($city);
}