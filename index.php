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

    else if($update->message->text == 'вейперы')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "Вейперы - это такая разновидность гомосексуалистов или я просто не в тренде ? "
        ]);
    }

    else if($update->message->text == 'вейп')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "Это что-то из секс шопа? "
        ]);
    }


    else if($update->message->text == 'намотка')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "Иди суда, я тебе кантал на *** намотаю!"
        ]);
    }

    else if($update->message->text == 'Эрхог')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "Это твой друг вейпер?"
        ]);
    }

    else if($update->message->text == 'мыш')
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



    else if($update->message->text == 'да')
    {
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id,
            'text' => "джигурда!"
        ]);
    }

    else if($update->message->text == 'Серега')
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




    /*
     *        }elseif ($text == "Картинка") {
            $url = "https://68.media.tumblr.com/6d830b4f2c455f9cb6cd4ebe5011d2b8/tumblr_oj49kevkUz1v4bb1no1_500.jpg";
            $telegram->sendPhoto([ 'chat_id' => $chat_id, 'photo' => $url, 'caption' => "Описание." ]);
     *
     */



    else if($update->message->text == '/popyachsa@Yamertbot')
    {   $url = "https://upyachka.io/img/up4kman.gif";
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendDocument([

            'chat_id' => $update->message->chat->id,
            'document' => $url
        ]);
    }

    /*
     * elseif ($text == "Последние статьи") {
            $html=simplexml_load_file('http://netology.ru/blog/rss.xml');
            foreach ($html->channel->item as $item) {
	     $reply .= "\xE2\x9E\xA1 ".$item->title." (<a href='".$item->link."'>читать</a>)\n";
        	}


            $telegram->sendMessage([ 'chat_id' => $chat_id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply ]);
        }
     */

    else if($update->message->text == '/statya@Yamertbot')
    {   $html=simplexml_load_file('http://netology.ru/blog/rss.xml');
        foreach ($html->channel->item as $item)
        {
            $reply .= "\xE2\x9E\xA1 ".$item->title." (<a href='".$item->link."'>читать</a>)\n";
        }

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([

            'chat_id' => $update->message->chat->id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }

    /*
     * $rss =  simplexml_load_file('http://bash.org.ru/rss/');
        $item = $rss->channel->item;
        for ($ib=0;$ib<101;$ib++) {
        $bash_utf=$item[$ib]->description;
        echo $bash_utf;};


        <?php
        $xml = simplexml_load_file('http://bash.org.ru/rss/');
        foreach ($xml->xpath('//item') as $item)
        {
        echo "<b><a href="$item->guid">$item->title
        <br/></a></b>$item->description<hr/>";
        }
        ?>

    $rawXML = str_replace('<![CDATA[<?xml version="1.0" encoding="UTF-8" ?>', "", $rawXML);
$rawXML = str_replace(']]>', "", $rawXML);

              //убираем лишнее из текста
           // $item = str_replace('<![CDATA[', '', $item);
            //$item = str_replace(']]>', '', $item);

     srand ((double) microtime() * 1000000);
    $random_number = rand(0,count($quotes)-1);
 echo ($quotes[$random_number]);


     */

    else if($update->message->text == '/bash@Yamertbot')
    {   $html=simplexml_load_file('https://bash.im/rss/');
        $pp = "\n";
        $counter = 0;

        //$randomcounter = rand(0,count($html->channel->item)-1);
        foreach ($html->channel->item as $item)
        {
            srand ((double) microtime() * 1000000);
            $randomcounter = rand(1,count($item)-1);
            $counter++;
            if($counter = $randomcounter)
            {
                $reply .= $item->description.$pp.$pp;
                break;
            }

        }
        $reply = str_replace('<br>', " ", $reply);
        $reply = str_replace('&quot', " ", $reply);

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            // 'chat_id' => $update->message->chat->id, 'parse_mode' => 'Markdown', 'disable_web_page_preview' => true, 'text' => $reply
            'chat_id' => $update->message->chat->id, 'parse_mode' => 'Markdown', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }


    /*
        else if($update->message->text == '/bash@Yamertbot')
        {   $html=simplexml_load_file('https://bash.im/rss/');
            //$item = $html->channel->item;
            $pp = "\n";
            foreach ($html->channel->item as $item)//->description foreach ($html->channel->item->description as $item)
            {
                $reply .= $item->title.$pp; //.$item->description.$pp.$pp; //$reply .= $item->title; //>title;
            }

            $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
            $response = $client->sendMessage([

                'chat_id' => $update->message->chat->id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply
            ]);
        }
    */

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
    else if($update->message->text == '/news@Yamertbot')
    {   $html=simplexml_load_file('http://bloknot-krasnodar.ru/rss_news.php');
        $pp = "\n";
        foreach ($html->channel->item as $item)
        {
            $reply .= $item->title.$pp.$item->description.$pp.$item->link.$pp.$pp;
        }

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([

            'chat_id' => $update->message->chat->id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }

    //kino
    else if($update->message->text == '/cinema@Yamertbot')
    {   $html=simplexml_load_file('https://st.kp.yandex.net/rss/news_premiers.rss');
        $pp = "\n";
        $count = 0;
        foreach ($html->channel->item as $item)
        {
            $counter++;
            if($counter > 3)
            {
                break;
            }
            $reply .= $item->title.$pp.$item->link.$pp.$item->description.$pp.$pp;
        }

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([

            'chat_id' => $update->message->chat->id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }

    /*
    //pravovlavie
    else if($update->message->text == '/omg@Yamertbot')
    {   $html=simplexml_load_file('http://www.pravoslavie.ru/xml/prav_answers_rss.xml');
        $pp = "\n";
        foreach ($html->channel->item as $item)
        {
            $reply .= $item->title.$pp.$item->description.$pp.$item->link.$pp.$pp;
        }

        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([

            'chat_id' => $update->message->chat->id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }
    */


    //pravovlavie

    else if($update->message->text == '/omg@Yamertbot')
    {   $html=simplexml_load_file('http://www.pravoslavie.ru/xml/prav_answers_rss.xml');
        $pp = "\n";
        $count = 0;
        foreach ($html->channel->item as $item)
        {
            $counter++;
            if($counter > 2)
            {
                break;
            }
            $reply .= $item->title.$pp.$item->description.$pp.$item->link.$pp.$pp;
        }
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }



    //http://omskregion.info/rss.xml
    else if($update->message->text == '/omsk@Yamertbot')
    {   $html=simplexml_load_file('http://omskregion.info/rss.xml');
        $pp = "\n";
        $count = 0;
        foreach ($html->channel->item as $item)
        {
            $reply .= $item->title.$pp.$item->description.$pp.$pp;
            $counter++;
            if($counter > 5)
            {
                break;
            }

        }
        $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
        $response = $client->sendMessage([
            'chat_id' => $update->message->chat->id, 'parse_mode' => 'HTML', 'disable_web_page_preview' => true, 'text' => $reply
        ]);
    }





    /*

        else if($update->message->text == 'test')

            $keyboard = new  Zelenin\Telegram\Bot\Type\Inline\InlineKeyboardMarkup(   //\TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(
                [
                    [
                        ['callback_data' => 'data_test', 'text' => 'Answer'],
                        ['callback_data' => 'data_test2', 'text' => 'ОтветЪ']
                    ]
                ]
            );

        {
            $response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
            $response = $client->sendMessage([
                'chat_id' => $update->message->chat->id,
                'text' => "\xF0\x9F\x98\x81"
            ]);
        }
    */


    
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
