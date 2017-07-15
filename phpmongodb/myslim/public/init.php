<?php

	//Checking collection name
	function checking_has_Collection($collectionName){
		$array = array(
			"Category",
			"subCategory",
			"Production",
			"ProductDetailInformation",
			"compareProduction",
			"featureImage"
		);
		foreach ($array as $key ) {
			if($key==$collectionName){
				return true;
			}
		}
		return false;
	}



	function get_children_id($collectionName){
		$array = array(
			"Category"  			     =>"null",
			"subCategory"				 =>"categoryId",
			"Production"                 =>"subCategotyId",
			"ProductDetailInformation"	 =>"productId",
			"compareProduction"		 	 =>"productId",
			"featureImage"				 =>"productId"
		);

		return $array[$collectionName];
	}
?>