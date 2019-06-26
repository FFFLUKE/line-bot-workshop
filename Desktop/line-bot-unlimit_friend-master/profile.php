<?php


$access_token = 'KiVPpwkIe+JNBb78prq7VdriQTWw8ZkyXYhi1/jqEjc3CvtaCrTgJjooo9vJdeNZAcdpiWy8dWPg6mFclLnoe9NWGe75yvCPHqM/vJIqqI7+6MNkiHSXvb3Zi6AQJW0eFO4ZL/3kqu60qLUEGtR7pQdB04t89/1O/w1cDnyilFU=';

$userId = 'Ue7305a5aaef8f38f833ca3c948c1175c';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

