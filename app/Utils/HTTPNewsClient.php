<?php

namespace App\Utils;

use GuzzleHttp\Client;

class HTTPNewsClient{
    private static $client = [];
    public static function get():Client{
        $cl = static::class;

        if(!isset(self::$client[$cl])){
              
              self::$client[$cl]=new Client(['base_uri'=>"https://newsapi.org/v2",'time_out'=>3.0]);
        }
        return self::$client[$cl];

    }
}