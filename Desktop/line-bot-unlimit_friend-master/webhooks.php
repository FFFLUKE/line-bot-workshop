<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'KiVPpwkIe+JNBb78prq7VdriQTWw8ZkyXYhi1/jqEjc3CvtaCrTgJjooo9vJdeNZAcdpiWy8dWPg6mFclLnoe9NWGe75yvCPHqM/vJIqqI7+6MNkiHSXvb3Zi6AQJW0eFO4ZL/3kqu60qLUEGtR7pQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
$text2 = '';
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text']."\n".$event['source']['userId']."\n";
			// Get replyToken
			$text2 = $text;
		}
	}
}
require "vendor/autoload.php";
$channelSecret = '9d5dbc90c73eef6a3ebd56a3a16e0dd9';
$pushID = 'Ue7305a5aaef8f38f833ca3c948c1175c';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";
