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

    else if($update->message->text == 'упоротое животное')
    {
        //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "Ты разговариваешь с собственным ботом, кто бы, блять, говорил."
        ]);
    }

    else if(preg_match("/вейперы/i", $update->message->text))
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "Вейперы - это такая разновидность гомосексуалистов или я просто не в тренде ? "
        ]);
    }

    else if(preg_match("/вейп/i", $update->message->text))
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "Это что-то из секс шопа? "
        ]);
    }



    //else if($update->message->text == 'мыш')
    else if((preg_match("/мыш/i", $update->message->text)) || (preg_match("/Мыш/i", $update->message->text)) || (preg_match("/Мышь/i", $update->message->text)) || (preg_match("/мышь/i", $update->message->text)))

    {
        $url = "https://memepedia.ru/wp-content/uploads/2018/08/mi0-768x490.jpg";
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "кродеться"]);
        $response = $client->sendPhoto([
            'chat_id' => $update->message->chat->id,
            'photo' => $url
        ]);
    }



    //Серега
    else if(($update->message->text == 'Серега') || ($update->message->text == 'cерега') || ($update->message->text == 'Сергей') || ($update->message->text == 'боб')  )
    {
        $url = "https://vk.com/photo21506599_456239218";
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "серёга (от лат. yobaniy v rot, eto cho, nature ty? sergunya, seriy, serhio, serginio, serious serik, sergofan, serovodorod, serg, sergey) — сколько лет, сколько зим, как жизнь?"
        ]);
        $response = $client->sendPhoto([
            'chat_id' => $update->message->chat->id,
            'photo' => $url
        ]);
    }


    else if(preg_match("/упячка/i", $update->message->text))
    {   $url = "https://upyachka.io/img/up4kman.gif";
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendDocument([

            'chat_id' => $update->message->chat->id,
            'document' => $url
        ]);
    }

    //Самый навороченный парсер
    else if( ($update->message->text == '/bash@Yamertbot') || ($update->message->text == '/bash') || ($update->message->text == 'баш') )
    {   $html=simplexml_load_file('https://bash.im/rss/');
        $pp = "\n";
        $counter = 0;
        $randomcounter = rand(0,count($html->channel->item)-1);
        foreach ($html->channel->item as $item)
        {
            $counter++;
            if($counter == $randomcounter)
            {
                $reply .= $item->description;
                break;
            }

        }
        $reply = str_replace('<br>', "\n", $reply);
        $reply = str_replace('&quot;', " ", $reply);
       // $reply = str_replace(';', "\n", $reply);

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            // 'chat_id' => $update->message->chat->id, 'parse_mode' => 'Markdown', 'disable_web_page_preview' => true, 'text' => $reply
            'chat_id' => $update->message->chat->id, 'parse_mode' => 'Markdown', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }



    else if($update->message->text == '/weather@Yamertbot')
    {   $html=simplexml_load_file('http://informer.gismeteo.ru/rss/34929.xml');
        $pp = "\n";
        foreach ($html->channel->item as $item)
        {
            $reply .= $item->title.$pp.$item->description.$pp.$pp;
        }

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([

            'chat_id' => $update->message->chat->id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }

    //news
    else if(($update->message->text == '/news@Yamertbot') || ($update->message->text == 'новости'))
    {   $html=simplexml_load_file('http://bloknot-krasnodar.ru/rss_news.php');
        $pp = "\n";
        $count = 0;
        foreach ($html->channel->item as $item)
        {
            $counter++;
            if($counter > 2)
            {
                break;
            }
            $reply .= $item->title.$pp.$item->description.$pp.$pp;
        }

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([

            'chat_id' => $update->message->chat->id, 'parse_mode' => 'Markdown', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }

    //kino
    else if(($update->message->text == '/cinema@Yamertbot') || ($update->message->text == 'кино') )
    {   $html=simplexml_load_file('https://st.kp.yandex.net/rss/news_premiers.rss');
        $pp = "\n";
        $count = 0;
        foreach ($html->channel->item as $item)
        {
            $counter++;
            if($counter > 2)
            {
                break;
            }
            $reply .= $item->title.$pp.$item->description.$pp.$pp;
        }

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([

            'chat_id' => $update->message->chat->id, 'parse_mode' => 'Markdown', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }

    
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
