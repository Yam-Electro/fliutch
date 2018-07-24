<?php
    
require 'vendor/autoload.php';
//require 'Commands/weather.php';

$client = new Zelenin\Telegram\Bot\Api('520672444:AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA'); // Set your access token
//$url = 'http://rp5.ru/rss/4429/ru'; // URL RSS feed
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
