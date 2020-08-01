<?php

$url = "https://toproi.biz/api/{app}/{func}.{format}?id={180}-{47a6b8abfaed09405c8934121a61517a}";

$order = [
  "APPID" => '47a6b8abfaed09405c8934121a61517a',
  "id" => 180,
  "name" => "Тест тест",
  "phone" => "+79111111111",
  "webmaster_id" => 65,
  "offer" => "200",
  "ip" => "109.95.210.183"
];

$ch = culr_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

echo $_GET [order];
print_r($data);

