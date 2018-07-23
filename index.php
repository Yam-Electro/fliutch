<?php

/*
* This file is part of GeeksWeb Bot (GWB).
*
* GeeksWeb Bot (GWB) is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License version 3
* as published by the Free Software Foundation.
* 
* GeeksWeb Bot (GWB) is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.  <http://www.gnu.org/licenses/>
*
* Author(s):
*
* © 2015 Kasra Madadipouya <kasra@madadipouya.com>
*
*/
require 'vendor/autoload.php';

$client = new Zelenin\Telegram\Bot\Api('520672444:AAF2z3IJXUPUJ7si1Bdw6N8D2Ejcjq-B7lA'); // Set your access token
//$url = 'http://rp5.ru/rss/4429/ru'; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));
    

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
    
    else if($update->message->text == "Как говорит кошечка?")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Мяу-Мяу"
                                         ]);

        
    }
    
    else if($update->message->text == "Как говорит собачка?")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Гав-Гав"
                                         ]);
    }
    
    else if($update->message->text == "Как говорит Серега?")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Отъебитесь уже от Сереги! Он работает/бухает/играет. (Нужное подчеркнуть)"
                                         ]);
        
    }
    
    else if($update->message->text == "Как говорит Элвис?")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "вываждльмДЖКЛМУТЖЩШИТЖУКЩШИрждмлтыжуди",
                                  
                                         ]);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                    
                                         'text' => "Кажись Эл упал лицом на клавиатуру"
                                         ]);
        
    }
    
    else if($update->message->text == "Как говорит ям?")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Серег! Хули сидим, пошли за Майкопским!"
                                         ]);
    }
    
    
    
    
    else if($update->message->text == "бля")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Не материся в храме божьем, ато крестом переебу!"
                                         ]);
        
    }
    
    
    else if($update->message->text == '/help')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Тут тебе никто не поможет, дружище... Ну а если серьезно: /email,  Как говорит кошечка?, Как говорит собачка?, Как говорит Серега?, бля. Пока все."
                                         ]);
        
    }

    else if($update->message->text == "как говорит бот?")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Вы только посмотрите на этого гения, как будто итак не понятно как бот говорит, он вообще не говорит а пишет, харе деградировать, одноклеточное!"
                                         ]);
        
    }
    
    else if($update->message->text == "как говорит Валек?")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Здравствуйте, я сегодня поработал а потом еще поработал, сейчас поработаю, посплю а потом опять пойду на работу."
                                         ]);
        
    }
    
    else if($update->message->text == "как говорит Ырхог?")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "Хуй знает, я это животное давно не видел."
                                         ]);
        
    }
    
    else if($update->message->text in "писька")
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
                                         'chat_id' => $update->message->chat->id,
                                         'text' => "аяяшеньки яяй, кто у нас тут ругается?"
                                         ]);
        
    }
    

    
    /*
    else if($update->message->text == '/help')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "List of commands :\n /email -> Get email address of the owner \n /latest -> Get latest posts of the blog 
    		/help -> Shows list of available commands"
    		]);
    
    }
    else if($update->message->text == '/latest')
    {
    		Feed::$cacheDir 	= __DIR__ . '/cache';
			Feed::$cacheExpire 	= '5 hours';
			$rss 		= Feed::loadRss($url);
			$items 		= $rss->item;
			$lastitem 	= $items[0];
			$lastlink 	= $lastitem->link;
			$lasttitle 	= $lastitem->title;
			$message = $lasttitle . " \n ". $lastlink;
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => $message
				]);
   

    }
    else
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Invalid command, please use /help to get list of available commands"
    		]);
    }
    */

} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
