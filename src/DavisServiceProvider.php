<?php
/**
 * Created by PhpStorm.
 * User: fanxinyu
 * Date: 2020-11-05
 * Time: 17:26
 */

namespace Daviswwang\Weather;

use Illuminate\Support\ServiceProvider as NewServiceProvider;


class DavisServiceProvider extends NewServiceProvider
{

    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function () {
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }


}