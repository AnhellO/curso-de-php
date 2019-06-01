<?php

echo "<pre>\n";

$clienteCurl = curl_init();

curl_setopt_array($clienteCurl, [
	CURLOPT_URL => 'http://www.declaranetcoahuila.gob.mx',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FRESH_CONNECT => true,
	CURLOPT_TIMEOUT => 10,
	CURLOPT_HEADER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_AUTOREFERER => true,
	CURLOPT_MAXREDIRS => 5,
]);

$response = curl_exec($clienteCurl);
echo $response . "\n";

curl_close($clienteCurl);

echo "</pre>\n";