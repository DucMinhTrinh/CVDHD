<?php 

	require '../../../vendor/autoload.php';//Include Mongo Driver
	$client = new MongoDB\Client;
	$websosanh  = $client->websosanh;

	function getAllCategory(){

		global $websosanh;
		$category = $websosanh->Category->find();
		$array = array();
		foreach ($category as $key) {
			$data= array(
				"_id"           =>$key->_id,
				"categoryName"  =>$key->categoryName
			);
			$array[] = $data;
		}
		return $array;
	}

	function getsubCategoryBId($categoryId){
		global $websosanh;
		$array = array();
		$subcategory = $websosanh->subCategory->find(array("categoryId"=>$categoryId));
		foreach ($subcategory as $key) {
			$data= array(
				"_id"           =>$key->_id,
				"subname"       =>$key->subname
			);
			$array[] = $data;
		}
		return $array;
	}