<?php

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'https://randomuser.me/');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse - json_decode($phoneList);