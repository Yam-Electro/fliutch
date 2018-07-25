<?php

require 'vendor/autoload.php';
include 'Weather.php';
include 'TelegramBot.php.php';

// Set your access token
$client = new Zelenin\Telegram\Bot\Api('520672444:AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA');

$update = json_decode(file_get_contents('php://input'));

$weatherApi = new Weather();

//your app
try {

    if($update->message->text == '/email')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "Можете писать этому типу (а можете не писать): optixkiller@gmail.com"
        ]);
    }

    if (isset($update->message->location))
    {

        //получаем погоду
        $response = $weatherApi->getWeather($update->message->location->latitude, $update->message->location->longitude);


        switch ($response->weather[0]->main) {
            case "Clear"  :
                $response = "Хоббиты по ошибке забрались в Краснодар и пытаются утопить кольцо в растаявшем асфальте";
                break;

            case "Rain" :
                $response = "Какой-то ебанутый дед катается на лодке под окном и собирает каждой твари по паре";
                break;

            case "Clouds" :
                $response = "Ну наконец то на улице облачно, Серега го за Майкопским!";
                break;

            default :
                $response = "Толи лыжи не едут толи я долбоеб";

        }
    }



    } catch (\Zelenin\Telegram\Bot\NotOkException $e) {

        //echo error message ot log it
        //echo $e->getMessage();

    }



























/*
include ('weather.php');
include ('TelegramBot.php');

//Тупое получение сообщений
$telegtamApi = new TelegramBot();
$weatherApi = new Weather();
//$client = new Zelenin\Telegram\Bot\Api('520672444:AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA');
$update = json_decode(file_get_contents('php://input'));

while (true) {
    sleep(2);

    $updates = $telegtamApi->getUpdates();



    //пробежка по сообщениям
    foreach ($updates as $update) {

        if (isset($update->message->location)){

            //получаем погоду
            $result = $weatherApi->getWeather($update->message->location->latitude, $update->message->location->longitude);


            switch ($result->weather[0]->main) {
                case "Clear"  :
                    $response = "Хоббиты по ошибке забрались в Краснодар и пытаются утопить кольцо в растаявшем асфальте";
                    break;

                case "Rain" :
                    $response = "Какой-то ебанутый дед катается на лодке под окном и собирает каждой твари по паре";
                    break;

                case "Clouds" :
                    $response = "Ну наконец то на улице облачно, Серега го за Майкопским!";
                    break;

                 default :
                    $response = "Толи лыжи не едут толи я долбоеб";

            }

            //ответ на каждое сообщение

            //$telegtamApi->sendMessage->($update->chat->id, $response);


        }

    }

}




*/

























/*
// Set your access token
$client = new Zelenin\Telegram\Bot\Api('520672444:AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA');
    
$update = json_decode(file_get_contents('php://input'));
    
//$weatherApi = new Weather();

//your app
try {

    if($update->message->text == '/email')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => "Можете писать этому типу (а можете не писать): optixkiller@gmail.com"
     	]);
    }
    
    else if($update->message->location)
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        
        $response = $weatherApi->getWeather($update->message->location->latitude, $update->message->location->longtitude);
        
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "В деревне Гадюкино опять дожди."
                                        
    		]);
   
    }
    
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}

*/
