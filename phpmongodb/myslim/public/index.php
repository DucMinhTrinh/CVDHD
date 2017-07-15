<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';//Include Slim Framwork
require '../../vendor/autoload.php';//Include Mongo Driver
require 'init.php';//Include init.php 
require 'elasticsearch/vendor/autoload.php';


use Elasticsearch\ClientBuilder;

$clientES = ClientBuilder::create()->build();

	$hosts = [
    	'http://elastic:changeme@localhost:9200'// Different credentials on different host
	];
	$clientES = ClientBuilder::create()->setHosts($hosts)->build();

$client = new MongoDB\Client;

$websosanh  = $client->websosanh;






















//Get all categorys
function getDocuments($collectionName){

	global $websosanh;

	$category = $websosanh->collectionName;	

	$documents    = $category->find();

	foreach ($documents as $key) {
		
		echo $key->_id;


	}
}

$app = new \Slim\App;
//Enable debugging (on by default)
// $app->config('debug', true);

 //300 seconds = 5 minutes


$app->get('/hello',function(){
	include "check.php";
});

$app->get('/getListLocation',function(Request $request,Response $response,$args){
	try{
		if(isset($_GET['productId'])){
			$productId = $_GET['productId'];
			$result = array(
					"status" => "200"
			);
			$results =array();
			global $websosanh;
			$list = $websosanh->compareProduction->find(array("productId"=>$productId),array("MerchantStore"=>true,"MerchantName"=>true,"MerchantDomain"=>true));
			foreach ($list as $elements) {
				$check = $websosanh->locationMerchantStore->findOne(array("MerchantStore"=>$elements['MerchantStore']));
				if($check!=null){
					//$results[] = $elements['MerchantStore'];
					if(strlen($elements["MerchantName"]) > 5){
						$check["MerchantCompany"] = $elements["MerchantName"];
					}else{
						$check["MerchantCompany"] = $elements["MerchantDomain"];
					}
					unset($check["_id"]);
					unset($check["MerchantStore"]);
					$results[] = $check;

				}
			}
			$result["ListLocaltion"] = $results;
			return  $response->getBody()->write(json_encode($result),JSON_UNESCAPED_UNICODE);

		}else{
			$result = array(
					"status" => "404",
					"message"=> "Do not have productId parameter"
				);
			return  $response->getBody()->write(json_encode($result),JSON_UNESCAPED_UNICODE);
		}
	}catch(Exception $e){
		$result = array(
				"status" => "404",
				"message"=> "error connection internet"
		);
		return  $response->getBody()->write(json_encode($result),JSON_UNESCAPED_UNICODE);
	}
});

//Get location google map api
$app->get('/getLocation',function(Request $request,Response $response,$args){
	try{
			if(isset($_GET['MerchantStore'])){
				global $websosanh;
				$MerchantStore = trim($_GET['MerchantStore']);
				$list = $websosanh->locationMerchantStore->findOne(array("MerchantStore"=>$MerchantStore));
				return  $response->getBody()->write(json_encode(array("data"=>$list['addressList'])),JSON_UNESCAPED_UNICODE);
			}else{
				$result = array(
					"status" => "404",
					"message"=> "Do not have MerchantStore parameter"
				);
				return  $response->getBody()->write(json_encode($result),JSON_UNESCAPED_UNICODE);
			}
		
	}catch(Exception $e){
		$result = array(
				"status" => "404",
				"message"=> "error connection internet"
		);
		return  $response->getBody()->write(json_encode($result),JSON_UNESCAPED_UNICODE);
	}
});






//Click to a product
// START CLICK TO A PRODUCTION
$app->get('/clickToProduct/{productId}',function(Request $request,Response $response){
	try{
		global $websosanh;
		$productId =  $request->getAttribute('productId');
		$check    = $websosanh->Production->findOne(array("_id"=>$productId));
		if($check!=NULL){

			$find = $websosanh->clickToProduct->findOne(array("_id"=>$productId));

			if($find!=NULL){
					$view = $find->clickNumber;
					$view++;
					$result = $websosanh->clickToProduct->updateOne(['_id' => $productId], ['$set' => ['clickNumber' => $view]]);
					if($result){
						$array = array(
							"status"=>200,
							"message"=>"Updated"
						);
						return $response->getBody()->write(json_encode($array));
					}else{
						$array = array(
							"status"=>404,
							"message"=>"Have errors.Plese check your connection"
						);
						return $response->getBody()->write(json_encode($array));
					}
			}else{
				$document = array(
				  "_id" 	=> $productId,
			      "clickNumber" => 1
			   	);
				$result = $websosanh->clickToProduct->insertOne($document);
				if($result){
					$array = array(
						"status"=>200,
						"message"=>"Inserted"
					);
					return $response->getBody()->write(json_encode($array));
				}else{
					$array = array(
						"status"=>404,
						"message"=>"Have errors.Plese check your connection"
					);
					return $response->getBody()->write(json_encode($array));
				}
			}


		}else{
			$array = array("status"=>"400","message"=>"Id is not correct!!");
			return $response->getBody()->write(json_encode($array));
		}



	}catch(Exception $e){
		$array = array("status"=>"400","message"=>"error");
		return $response->getBody()->write(json_encode($array));
	}
});





$app->get('/getTopProduct/{limit}',function(Request $request,Response $response){
	try{
		global $websosanh;
		$limit =  $request->getAttribute('limit');
		$array = array();
		if($limit=='all'){
			
			$data = $websosanh->clickToProduct->find(array(),array("sort"=>array("clickNumber"=>-1)),array("limit"=>-1));
			foreach ($data as $key) {
				$array[]= $key;
			}
			return $response->getBody()->write(json_encode(array("data"=>$array)));

		}else if( (int)$limit >0){
				
			$data = $websosanh->clickToProduct->find(array(),array("sort"=>array("clickNumber"=>-1)),array("limit"=>$limit));
			foreach ($data as $key) {
				$arr= array();
				$arr["_id"] = $key->_id;
				$arr["clickNumber"] = $key->clickNumber;
				$information = $websosanh->Production->findOne(array("_id"=>$key->_id));
				$price = $websosanh->compareProduction->findOne(array("productId"=>$key->_id));
				$pri = (array)(get_object_vars($price)['Products'])[0]["Price"];
				$arr["price"] = $pri[0];
				$arr["productName"]=$information->productName;
				$arr["RelationTotal"] = $information->RelationTotal;
				$featureImage = $websosanh->featureImage->findOne(array("productId"=>$key->_id));
				$arr["featureImage"] = $featureImage->imageLink;
				$array[]= $arr;
			}
			return $response->getBody()->write(json_encode(array("data"=>$array)));

		}else{
			$array = array("status"=>"400","message"=>"Limit must be numberic");
			return $response->getBody()->write(json_encode($array));
		}
	}catch(Exception $e){
		$array = array("status"=>"400","message"=>"error");
		return $response->getBody()->write(json_encode($array));

	}
});

// END PRODUCTION






$app->get('/findAllProduct/{subCategory_Id}',function(Request $request,Response $response){

	try{

		$subCategory_Id = $request->getAttribute('subCategory_Id');
		global $websosanh;		
		$result = $websosanh->Production->find(array("subCategotyId"=>$subCategory_Id));
		$array = array();
		foreach ($result as $key) {

				$element = array();
				$element["_id"] = $key->_id;
				$element["productName"]= $key->productName;
				$price = $websosanh->compareProduction->findOne(array("productId"=>$key->_id));
				$pri = (array)(get_object_vars($price)['Products'])[0]["Price"];
				$element["price"] = $pri[0];
				$featureImage = $websosanh->featureImage->findOne(array("productId"=>$key->_id));
				$element['imageList'] = $featureImage->imageLink;
				$element['RelationTotal'] = $key->RelationTotal;
				$array[] = $element;
		}
		$response->getBody()->write(json_encode(array("data"=>$array),JSON_UNESCAPED_UNICODE));

		return $response;

	}catch(Exception $e1){

	}
});



//Insert into ElasticSearch to ckecking
	$app->get('/insertES',function(){

		echo "Xin chào my client !!!";
		
		ini_set('max_execution_time', 3000);
		global $clientES;
		global $websosanh;

		$productions = $websosanh->Production;

		$result      = $productions->find();
		// var_dump($result);

		foreach ($result as $key) {

			$array      = array();
			//L?y và remove key
			$array =get_object_vars($key);
			$id = $array['_id'];
			unset($array['_id']);


			$_featureImage =  $websosanh->featureImage->findOne(array('productId'=>$id));
			$array['featureImage']= $_featureImage->imageLink;

			//Indexing into Elasticseach
			$params = [
			    'index' => 'websosanh',
			    'type' => 'auto',
			    'id' => $key->_id,
			    'body' => $array
			];
			
			$response = $clientES->index($params);
			print_r($response);
			
		}

	});


$app->get('/',function(){
		echo "Xin chào my client !!!";
	// ini_set('max_execution_time', 30000);
	// global $clientES;
	// global $websosanh;

	// $collectionName = 'Production';

	// $productions = $websosanh->$collectionName;

	// $result1      = $productions->find();


	// $resultTotal  = array();

	// foreach ($result1 as $key) {
	// 	$result      = array();
	// 	//L?y và remove key
	// 	$array =get_object_vars($key);
	// 	unset($array['_id']);

	// 	$result['Production']=$array; 
	// 	$_subCategory = get_object_vars($websosanh->subCategory->findOne(array('_id'=>$key->subCategotyId)));

	// 	$result['subCategory']=$_subCategory;

	// 	$_Category = get_object_vars($websosanh->Category->findOne(array('_id'=>$_subCategory["categoryId"])));
	// 	$result['Category']=$_Category;
	// 	$_featureImage =  $websosanh->featureImage->find(array('productId'=>$key->_id));
	// 	$image_arr =array();
	// 		foreach ($_featureImage as $image) {
	// 			$image_arr[] = $image->imageLink;
	// 		}

	// 	$result['featureIamge']= $image_arr;



	// 	$_compareProduction =  $websosanh->compareProduction->find(array('productId'=>$key->_id));
	// 	$_compareProduction_arr =array();
	// 		foreach ($_compareProduction as $image) {
	// 			$_compareProduction_arr[] = get_object_vars($image);
	// 		}

	// 	$result['compareProduction'] = $_compareProduction_arr;

	// 	$_ProductDetailInformation =  $websosanh->ProductDetailInformation->find(array('productId'=>$key->_id));
	// 	$_ProductDetailInformation_arr =array();
	// 		foreach ($_ProductDetailInformation as $image) {
	// 			$_ProductDetailInformation_arr[] = $image->htmlDescription;
	// 		}

	// 	$result['_ProductDetailInformation'] = $_ProductDetailInformation_arr;

		

	// 	$params = [
	// 	    'index' => 'websosanh',
	// 	    'type' => 'detailProducts',
	// 	    'id' => $key->_id,
	// 	    'body' => $result
	// 	];
		
	// 	$response = $clientES->index($params);
	// 	print_r($response);


	// }


	// $response->getBody()->write(json_encode($resultTotal,JSON_UNESCAPED_UNICODE));

	// return $response;


	// /*BEGIN*/
	
	// /*ENDING*/


});




/*Begin API to searh by elasticsearch*/

$app->get('/search',function(Request $request,Response $response)  use ($app){
	try{
		
		global $clientES;

		if(isset($_GET['from']) && isset($_GET['q'])){
			

					if( intval($_GET['from']) > -1){

						$params = [
						'index'=>'websosanh',
						'type'=>'auto',
					    'body' => [
					    	'from' => intval($_GET['from']),
					    	'size' => 20,
					        'query' => [
					            'match' => [
					                'productName' => htmlentities($_GET['q'])
					            ]
					        ]
					    ]
					];
						$total  =  $clientES->search($params)['hits'];
						$results = $total['hits'];
						$list = array();
						foreach ($results as $key) {
							// $production = array();
							$key["_source"]["_id"] = $key["_id"];
							$list[] = $key["_source"];
						}
						return $response->getBody()->write(json_encode(array("data"=>$list,"total"=>$total["total"])),JSON_UNESCAPED_UNICODE);

						

					}


		}



		if(isset($_GET['autoRecommend']) && isset($_GET['q'])){

			if($_GET['autoRecommend']=='ok'){

					
					$from = '';
					if(isset($_GET['from'])){
						$from = (int)$_GET['from'];
					}else{
						$from = 0;
					}

					$params = [
						'index'=>'websosanh',
						'type'=>'auto',
					    'body' => [
					    	'from' => $from,
					    	'size' => 20,
					        'query' => [
					            'match' => [
					                'productName' => htmlentities($_GET['q'])
					            ],
				            ]
									        
					    ]
					];

					$total  =  $clientES->search($params)['hits'];
					$results = $total['hits'];
					// var_dump($results);
					$array = array();
					foreach ($results as $key) {
						$production = array();
						$production["_id"] = $key["_id"];
						$production["productName"] = $key["_source"]["productName"];
						$array[] = $production;

					}
					return $response->getBody()->write(json_encode(array("data"=>$array,"total"=>$total["total"]),JSON_UNESCAPED_UNICODE));
			}


		}

		

		if( isset($_GET['id']) ){
		
			
					$params = [
						'index'=>'websosanh',
						'type'=>'detailProducts',
					    'body' => [
					    	
					        'query' => [
					            'match' => [
					                '_id' => htmlentities($_GET['id'])
					            ]
					        ]
					    ]
					];

			$results = $clientES->search($params);
			
			return $response->getBody()->write(json_encode(array("data"=>$results['hits']['hits']),JSON_UNESCAPED_UNICODE));
		}


	}catch(Exception $e){

		return $response->getBody()->write(json_encode(array("status"=>"error")));
	}
});


// Get compareProductList by ProductID
$app->get('/findCompareProductListByProductId/{productId}',function(Request $request,Response $response,$args){
	try{
		$productId = $args["productId"];

		global $websosanh;

		$compareProductList = $websosanh->compareProduction->find(array("productId"=>$productId));
		$arr = array();
		foreach ($compareProductList as $key) {
			$arr[]  = get_object_vars($key);
		}

		return $response->getBody()->write(json_encode(array("data"=>$arr)),JSON_UNESCAPED_UNICODE);
	}catch(Exception $e){

	}
});


/*Init app*/
// $app->get('/initApp',function(Request $request,Response $response){
// 	try{
// 		global $websosanh;
// 		global $clientES;

// 		$category = $websosanh->Category->find();
// 		$arr_Category = array();
// 		foreach ($category as $key) {
// 			$listCategory = array();
// 			$listCategory["_id"] = $key->_id;
// 			$listCategory["categoryName"] = $key->categoryName;
// 			$subCategory = $websosanh->subCategory->find( array("categoryId"=>$key->_id),array("limit"=>5));
// 			$listSubCategory = array();
// 			foreach ($subCategory as $key2) {
// 				$arr_subCategory = array();
// 				$arr_subCategory["_id"]=$key2->_id;
// 				$arr_subCategory["subname"]  = $key2->subname;
// 				$production = $websosanh->Production->find(array("subCategotyId"=>$key2->_id),array("limit"=>5));
// 				$arr_production = array();
// 				foreach ($production as $element) {


		
					
// 							$params = [
// 								'index'=>'websosanh',
// 								'type'=>'detailProducts',
// 							    'body' => [
// 							    	'from' => 0,
// 					    			'size' => 1,
// 							        'query' => [
// 							            'match' => [
// 							                '_id' => $element->_id
// 							            ]
// 							        ]
// 							    ]
// 							];

// 					$results = $clientES->search($params);
					
// 					$metadata = $results['hits']['hits'][0]['_source'];
// 					unset($metadata["subCategory"]);
// 					unset($metadata["Category"]);
// 					$arr_production[] = $metadata;
// 				}

// 				$arr_subCategory["listProduction"] = $arr_production;
// 				$listSubCategory[] = $arr_subCategory;
// 			}

// 			$listCategory["listSubCategoryProduct"] = $listSubCategory;
// 			$arr_Category[]=$listCategory;
// 		}


// 		return $response->getBody()->write(json_encode(array("data"=>$arr_Category)));
// 	}catch(Exception $e){
// 		return $response->getBody()->write(json_encode(array("status"=>"error")));
// 	}
// });

/*End API to search by alastichsearch*/




$app->get('/findProduct/{Category_Id}',function(Request $request,Response $response){

	try{

		$Category_Id = $request->getAttribute('Category_Id');
		
		global $websosanh;

		$productions = $websosanh->subCategory;

		$result      = $productions->find(array("categoryId"=>$Category_Id));

	
		

		$array = array();
		foreach ($result as $key) {
				$arr_subCategory = array();
			$arr_subCategory["subcategoryId"] = $key->_id;
			$arr_subCategory["subCategoryName"] = $key->subname;
			$product = $websosanh->Production->find(array("subCategotyId"=>$key->_id),array('limit'=>5));
			$arr_product = array();
			foreach ($product as $element) {
				$price = $websosanh->compareProduction->findOne(array("productId"=>$element->_id));
				echo "<pre>";
				// $pr = get_object_vars($price)['Products']; (get_object_vars($price)['Products'])
				$pri = (array)(get_object_vars($price)['Products'])[0]["Price"];
				$element["price"] = $pri[0];
				$featureImage = $websosanh->featureImage->findOne(array("productId"=>$element->_id));
				//$image_arr =array();
				//foreach ($featureImage as $image) {
					//$image_arr[] = $image->imageLink;
				//}
				$element['imageList'] =$featureImage->imageLink ;
				//$ProductDetailInformation_arr = array();
				//$ProductDetailInformation =  $websosanh->ProductDetailInformation->find(array("productId"=>$element->_id));
				//foreach ($ProductDetailInformation as $elements) {
					//$ProductDetailInformation_arr[] = $elements["htmlDescription"];
				//}
				//$element['ProductDetailInformation'] = $ProductDetailInformation_arr;
				unset($element["subCategotyId"]);
				$arr_product[] = $element;





			}
			$arr_subCategory["Product"] = $arr_product;
			$array[] = $arr_subCategory;
		}


		$response->getBody()->write(json_encode(array("data"=>$array),JSON_UNESCAPED_UNICODE));

		return $response;

	}catch(Exception $e1){

	}


});



$app->get('/findProductBySubCategory/{subCategory_Id}/{skip}/{limit}',function(Request $request,Response $response,$args){

	try{

	 	$subCategory_Id = $args["subCategory_Id"];
		$skip          = intval($args["skip"]);
		$limit         = intval($args["limit"]);
		
		global $websosanh;

		$array = array();
			$product = $websosanh->Production->find(array("subCategotyId"=>$subCategory_Id),array('skip'=>$skip,'limit'=>$limit));
			foreach ($product as $element) {

				$featureImage = $websosanh->featureImage->find(array("productId"=>$element->_id));
				$image_arr =array();
				foreach ($featureImage as $image) {
					$image_arr[] = $image->imageLink;
				}
				$element['imageList'] = $image_arr;

				$compare_arr = array();
				$compareProduction = $websosanh->compareProduction->find(array("productId"=>$element->_id));
				foreach ($compareProduction as $elements) {
					$compare_arr[] = $elements;
				}
				$element['compareProductList'] = $compare_arr;


				$ProductDetailInformation_arr = array();
				$ProductDetailInformation =  $websosanh->ProductDetailInformation->find(
						array("productId"=>$element->_id),
						array("htmlDescription"=>true)

				);
				foreach ($ProductDetailInformation as $elements) {
					$ProductDetailInformation_arr[] =$elements["htmlDescription"];

				}
				$element['ProductDetailInformation'] = $ProductDetailInformation_arr;

				$array[] = $element;
			}
		$response->getBody()->write(json_encode(array("data"=>$array),JSON_UNESCAPED_UNICODE));

		return $response;

	}catch(Exception $e1){

	}

});






/*BEGIN GET ALL DOCUMENTS FROM CATEGORY OR GET ALL DOCUMENTS FROM _id*/
$app->get('/{collectionName}/{params}',function(Request $request,Response $response){

	try{

		$params = $request->getAttribute('params');//Params can be 'all' or id
		$collectionName = $request->getAttribute('collectionName');

		

		if($params=='all'){
			try{
				global $websosanh;

				$category = $websosanh->$collectionName;	

			

				if(checking_has_Collection($collectionName)){
					
					$documents    = $category->find();
					
					$data = array();
					foreach ($documents as $element) {
						$data[]=$element;
					}



					$response->getBody()->write(json_encode(array("data"=>$data),JSON_UNESCAPED_UNICODE));

					return $response;

				}else{

				
				}


			}catch(Exception $e){

			}
		}else {
			$id =  $request->getAttribute('params');

			try{
				global $websosanh;

				$category = $websosanh->$collectionName;	

			

				if(checking_has_Collection($collectionName)){
					
					$documents    = $category->find(array("_id"=>$id));
					$data = array();
					foreach ($documents as $element) {
						$data[]=$element;

					}



					$response->getBody()->write(json_encode(array("data"=>$data),JSON_UNESCAPED_UNICODE));

					return $response;

				}else{

				
				}
			}catch(Exception $e3){

			}

		}
	}catch(Exception $e2){

	}
	
});

/*ENDING GET ALL DOCUMENTS FROM CATEGORY OR GET ALL DOCUMENTS FROM _id*/





//Find anything by something
$app->get('/{collectionName}/find/{children_id}',function(Request $request,Response $response){

	try{
		

		$collectionName = $request->getAttribute('collectionName');//Params can be 'all' or id
		$children_id = $request->getAttribute('children_id');
		if(checking_has_Collection($collectionName)){

			$meta_children_id = get_children_id($collectionName);

			//Finding
			try{
				global $websosanh;

				$category = $websosanh->$collectionName;	

			

					if(checking_has_Collection($collectionName)){
					
					$documents    = $category->find(array($meta_children_id=>$children_id));
					
					$data = array();
					foreach ($documents as $element) {
						$array =get_object_vars($element);
						
					
						$data[]=$array;
						
					}



					$response->getBody()->write(json_encode(array("data"=>$data),JSON_UNESCAPED_UNICODE));

					return $response;

				}else{

				
				}

			//End finding


			}catch(Exception $e1){

			}


		}else{

		}

	}catch(Exception $e){

	}
});

$app->run();