<?php
	require_once "init.php";
	if(isset($_POST["cmd"]) && $_POST["cmd"]=="ok"){
		if(isset($_POST["categoryId"])){
			$subcategoryId = getsubCategoryBId($_POST["categoryId"]);
			foreach ($subcategoryId  as $key) {
				$id = $key['_id'];
				$subname = $key['subname'];
				echo '<option value = '.'"'.$id.'">'.$subname.'</option>';
			}
		}
	}


