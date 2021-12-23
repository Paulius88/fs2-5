<?php



$postRequest = array(
    'firstFieldData' => 'foo',
    'secondFieldData' => 'bar'
);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Header-Key: Header-Value',
    'Header-Key-2: Header-Value-2'
));

$cURLConnection = curl_init('https://randomuser.me/');
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($cURLConnection);
curl_close($cURLConnection);

// $apiResponse - available data from the API request
$jsonArrayResponse - json_decode($apiResponse);