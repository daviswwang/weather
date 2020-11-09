<?php

namespace Daviswwang\Weather;

use Daviswwang\Weather\Exceptions\Exception;
use Daviswwang\Weather\Exceptions\HttpException;
use Daviswwang\Weather\Exceptions\InvalidArgumentException;
use GuzzleHttp\Client;

class Weather
{

    protected $key;
    protected $guzzleOptions = [];

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getHttpClient()
    {
        return new Client($this->guzzleOptions);
    }

    public function setGuzzleOptions(array $options)
    {
        $this->guzzleOptions = $options;

    }

    public function getLiveWeather($city, $format = 'json')
    {
        return $this->getWeather($city, 'base', $format);
    }

    public function getLongWeather($city, $format = 'json')
    {
        return $this->getWeather($city, 'all', $format);
    }

    protected function getWeather($city, $type = 'base', $format = 'json')
    {

        $url = 'https://restapi.amap.com/v3/weather/weatherInfo';

        if (!in_array(strtolower($format), ['xml', 'json'])) throw new InvalidArgumentException('Invalid response format: ' . $format);

        if (!in_array(strtolower($type), ['base', 'all'])) throw new InvalidArgumentException('Invalid type value(base/all): ' . $type);


        $query = array_filter([
            'key' => $this->key,
            'city' => $city,
            'output' => strtolower($format),
            'extensions' => strtolower($type),
        ]);

        try {
            $response = $this->getHttpClient()->get($url, [
                'query' => $query,
            ])->getBody()->getContents();
            return 'json' === $format ? \json_decode($response, true) : $response;

        } catch (\Exception $e) {

            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }

    }

}