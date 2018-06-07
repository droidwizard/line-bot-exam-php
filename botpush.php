<?php



require "vendor/autoload.php";

//$access_token = '3ALKAbKFoGuJyJnoDdn0HeyfbxLFtEXBKiC0lFeoNl/XbL4WhoCZzefp2n7UDuXaCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRUaKehDkiCr5p5CakHrPX+gauOGX/R5bB2e5yi7xjnHDAdB04t89/1O/w1cDnyilFU=';

//$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

//$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$access_token = '56cmfN/YZ1EOlLZRmhEjOu3T79iCRhfB2pt3poy2fYKe6I82RVZrjzyFT0wsBdpbGHoSswhxNA9qnDA0O0ibNELE7gPkR2G1eHVCNZyig/F9aJtYGb49PRQOkJniRYobyjYku1sw66ORSUu8hqy3MgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '32a8d7b23f2069e49c3456c67eb550e6';

$pushID = 'U2a0f35b0fd0815ed893c377c1f380329';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ทดสอบส่งข้อความด้วย Line Bot API');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







