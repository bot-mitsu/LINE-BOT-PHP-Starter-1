<?php
$proxy = 'tricycle';
$proxyauth = '	http://fixie:lGL3ZqnFSaYC8Rw@velodrome.usefixie.com:80';
$access_token = 'JDxyQwsiEXhl1GJL0dk1qESO+pF4XNpNidsKqdUH4f68q/DgEG+3geq0Rie2VilnRV20bJmpVW9LyeJNbgZy25/G1KdNy26goS0LxhEGlD7YE+0znHvJVDfvPLjYQMS1DwNXXeQXrXyY3cW4KNV8xwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
