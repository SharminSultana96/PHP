<?php
$OpenWeather = ['api_key' => 'a5c48e2e5b2d29c6a3f3d3bba4ba2a80'];
$zip = "98109";
$lat = 23.73665039333701;
$lon = 90.41176254529381;
$base_url = "https://api.openweathermap.org/data/2.5";
// $weather_url = "/weather?zip=" . $zip;
$weather_url = "/weather?lat=" . $lat. "&lon=" . $lon;
$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
$weather = json_decode(file_get_contents($api_url));
echo "<pre>";
print_r($weather);

?>