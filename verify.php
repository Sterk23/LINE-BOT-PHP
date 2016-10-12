<?php
$access_token = 'zV6ig+sovBFQZzDEdwkcMa4BDZ64UJs0Ji3m7zeE+tWGnZEoEvglEp9yR4e0fHhciPdJX9huhaEKuN8gcxM96gYFFuggjhS09gP5f4VvBP4AYbOihDRdnAofo6bsqrfm9ShhTY0fz1NmhzKdQYUYtwdB04t89/1O/w1cDnyilFU=';
$proxy = '	http://fixie:INGwXWu6NOcqrib@velodrome.usefixie.com:80';
$proxyauth = 'sthananon@gmail.com:ytrewq4321';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;