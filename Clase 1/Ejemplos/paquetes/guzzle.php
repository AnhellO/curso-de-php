<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

echo "<pre>\n";


// Crea el client Guzzle y ejecuta un GET request a la API
$client = new Client();
$response = $client->request('GET', 'https://randomuser.me/api/', [
	'query' => [
		'results' => 10
	]
]);

echo "Imprimiendo el response object:\n"
print_r($array);

echo "Imprimiendo el response body:\n"
$array = json_decode($response->getBody(), true);
print_r($array);

echo "</pre>\n";