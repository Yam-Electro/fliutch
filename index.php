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

    else if($update->message->text == '/bash@Yamertbot')
    {   $html=simplexml_load_file('https://bash.im/rss/');
        $pp = "\n";
        $counter = 0;
        foreach ($html->channel->item as $item)
        {
            $counter++;
            if($counter > 1)
            {
                break;
            }
            //убираем лишнее из текста
            //$item = str_replace('<br>', "", $item);
            //$item = str_replace('&quot', "", $item);

            $reply .= $item->description.$pp.$pp;

        }
        $reply = str_replace('<br>', " ", $reply);
        $reply = str_replace('&quot', " ", $reply);

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            // 'chat_id' => $update->message->chat->id, 'parse_mode' => 'Markdown', 'disable_web_page_preview' => true, 'text' => $reply
            'chat_id' => $update->message->chat->id, 'parse_mode' => 'Markdown', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }

    
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
