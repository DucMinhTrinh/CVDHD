
<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;

	require '../vendor/autoload.php';//Include Slim Framwork
	require '../../vendor/autoload.php';//Include Mongo Driver
	require 'init.php';//Include init.php 




	$client = new MongoDB\Client;

	$websosanh  = $client->websosanh;



	$productions = $websosanh->Production;


	foreach ($productions as $elements) {
		echo $elements->productName;
		echo "<br/>";
	}

