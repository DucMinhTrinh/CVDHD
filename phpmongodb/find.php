<?php
	
	require 'vendor/autoload.php';


	$client = new MongoDB\Client;

	$websosanh  = $client->websosanh;

	$production = $websosanh->featureImage;


	$documents    = $production->find();

	$index =0;
	foreach ($documents as $key) {
		echo "<pre>";
		var_dump($key);
		echo "</pre>";
		$index++;
	}

	var_dump($index);
	


?>