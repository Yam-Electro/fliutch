<?php
/**
 * Created by PhpStorm.
 * User: skeleton
 * Date: 30.09.17
 * Time: 0:10
 */

use GuzzleHttp\Client;

class TelegramBot
{
    protected $token = "AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA";

    protected $updatedId;

    public function query($method, $params = [])
    {
        $url = "https://api.telegram.org/bot";

        $url .= $this->token;

        $url .= "/" . $method;

        if(!empty($params)) {
            $url .= "?" . http_build_query($params);
        }

        $client = new Client([
            'base_uri' => $url
        ]);

        $result = $client->request('GET');

        return json_decode($result->getBody());
    }

    public function getUpdates()
    {
        $response = $this->query('getUpdates', [
            'offset' => $this->updatedId + 1
        ]);

        if (!empty($response->result)) {
            $this->updatedId = $response->result[count($response->result) - 1]->update_id;
        }

        return  $response->result;
    }

    public function sendMessage($chat_id, $text)
    {
        $response = $this->query('sendMessage', [
            'text' => $text,
            'chat_id' => $chat_id
        ]);

        return $response;
    }
}