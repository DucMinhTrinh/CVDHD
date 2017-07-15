<?php


	require 'vendor/autoload.php';

	$client = new MongoDB\Client;

	$companydb = $client->companydb;

	var_dump($client->createDatabase('testcase'));


	foreach ($client->listDatabases() as $elements) {
		echo "<pre>";
		var_dump($elements);
		echo "</pre><hr>";
	}



	//$result    = $companydb->dropCollection('empcollection');

	//var_dump($result);

	//$result1 = $companydb->createCollection('empcollection');

	/*
	echo "<pre>";
	var_dump($result1);
	echo "</pre>";
	*/


/*
	foreach ($companydb->listCollections() as $elements) {
		echo "<pre>";

		var_dump($elements);
		echo "</pre><hr>";
	}
*/

?>