<?php



require "vendor/autoload.php";

$access_token = 'KiVPpwkIe+JNBb78prq7VdriQTWw8ZkyXYhi1/jqEjc3CvtaCrTgJjooo9vJdeNZAcdpiWy8dWPg6mFclLnoe9NWGe75yvCPHqM/vJIqqI7+6MNkiHSXvb3Zi6AQJW0eFO4ZL/3kqu60qLUEGtR7pQdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '9d5dbc90c73eef6a3ebd56a3a16e0dd9';
// ID ที่ต้องการส่งไปหา
$pushID = 'Ue7305a5aaef8f38f833ca3c948c1175c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ลองของหน่อย');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







