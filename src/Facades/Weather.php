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
    protected static function getFacadeAccessor()
    {
        return 'weather';
    }
}