<?php

function r($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}


$city = "Anand";

$API_KEY = '0ee877f124ac6b19a8a5f8f76287b0a1';

$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$API_KEY";

$ch = curl_init();    # step 1

# step 2
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
# curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");     #important

$res = curl_exec($ch);

$data =  json_decode($res, true);

// echo htmlspecialchars($res);
echo "<pre>";
r($data);
echo "</pre>";