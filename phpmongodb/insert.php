<?php

	require '../../vendor/autoload.php';

	$client = new MongoDB\Client;

	$companydb  = $client->websosanh;

	$emcollection = $companydb->clickToProduct;


	$insertMenu   = $emcollection->insertMany([

		[
			
			'name'  => 'Hoàng Thắng 1',
			'age'   => '20',
			'skill' => 'mongoDB'

		],
		[
			
			'name'  => 'Hoàng Thắng 2',
			'age'   => '20',
			'skill' => 'mongoDB'

		]
		,[
		
			'name'  => 'Hoàng Thắng 3',
			'age'   => '20',
			'skill' => 'mongoDB'

		]
		,[
			
			'name'  => 'Hoàng Thắng 4',
			'age'   => '20',
			'skill' => 'mongoDB'

		]


	]);

	/*
	$insertOneResult = $emcollection->insertOne(
		[
			'_id'   =>1,
			'name'  => 'Hoàng Thắng',
			'age'   => '20',
			'skill' => 'mongoDB'

		]
	);
	*/

	printf("Inserted %d documents",$insertMenu->getInsertedCount());

	//var_dump($insertMenu->getInsertedId());

