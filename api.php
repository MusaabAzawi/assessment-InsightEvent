<?php


$url = "http://json.api-postcode.nl?";
$apiKey = '58d5c19e-adb4-481e-ade2-89e45cb53631';

$curl = curl_init();
$auth_data = array(
    'auth' 		=> '58d5c19e-adb4-481e-ade2-89e45cb53631',
    'postcode'  => '9724GN',
    'number' => '12'
);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $auth_data);
curl_setopt($curl, CURLOPT_URL, 'http://json.api-postcode.nl');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$result = curl_exec($curl);
if(!$result){die("Connection Failure");}
curl_close($curl);
echo $result;

//volledig gekopieerd. Json parsen 404 
