<?php
    
require 'vendor/autoload.php';
//include ('vendor/autoload.php');
//include ('weather.php');

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
        	'text' => "Можете писать этому типу (а можете не писать111): optixkiller@gmail.com"
     	]);
    }

    
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
