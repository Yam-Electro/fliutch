<?php

require 'vendor/autoload.php';
    
class Weather
    {
        protected $token = "520672444:AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA";
        public function getWeather($lat, $lon)

        {
       // $url = "http://api.openweathermap.org/data/2.5/forecast?id=524901&APPID=bff84a22162e74f2e553e56e6db7862c";
            $url = "http://api.openweathermap.org/data/2.5/forecast";
        $params = [];
        $params['lat'] = $lat;
        $params['lon'] = $lon;
        $params['appid'] = $this->token;
        
        $url .= "?" . http_build_query($params);
            
        $client =  new Client([
            'base_uri' => $url
            
            ]);
            $result = $client->request('GET');
            
            return json_decode($result->getBody());
            
        }
        
    }
