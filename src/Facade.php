<?php
/**
 * Created by PhpStorm.
 * User: fanxinyu
 * Date: 2020-11-10
 * Time: 10:19
 */

namespace Daviswwang\Weather;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return 'weather';
    }


    protected static function __callStatic($name, array $arguments)
    {
        $instance = static::$app->make(static::getFacadeAccessor());

        return $instance->$name(...$arguments);
    }
}