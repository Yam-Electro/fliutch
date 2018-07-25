<?php


$client = new Zelenin\Telegram\Bot\Api('520672444:AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA');


class TelegramBot
    {
        protected $token = "520672444:AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA";
        protected function query($method, $params = [])
        {
            $url = "ttps://api.telegram.bot;";
            $url .= $this->$token;
            url .= "/" . $method;

            if (!empty($params)) {
               $url .= "?" . http_build_query($params);
            }
/*
            $client = new Client([
                'base_uri' => $url
            ]);
            $result = $client->request('GET');
            return json_decode($result->getBody());
*/
        }


    public function getUpdates()
    {
       $response = $this->query('getUpdate');
       return $response->result;
    }

public function sendMessage()
{

}



    }


