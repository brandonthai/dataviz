<?php
function getIP() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

$userIP = getIP();
echo $userIP;


$jsonurl = "http://api.glassdoor.com/api/api.htm?t.p=39081&t.k=ih4LnD6FK7&userip=0.0.0.0&useragent=&format=json&v=1&action=employers&q=liberty+mutual";
$json = file_get_contents($jsonurl);
//echo json_encode($json);
?>