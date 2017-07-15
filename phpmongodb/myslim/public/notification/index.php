<?php
	require_once "init.php";
	$category = getAllCategory();
	$firstSub = $category[0]["_id"];
	$listFirstsubCategory = getsubCategoryBId($firstSub);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sent message to client by notification</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="notification.js"></script>
	</head>
<body>
	<div class="container">
		<center><h1>Sent message for client by notification</h1></center>
		<div class="row" style="margin-top:5%">
			<div class="col-md-12 ">
				<div class="col-md-3 col-xs-12">
					<center><h4>Category</h4></center>
					<select class="form-control" id="sel1" disabled="disabled">
						<?php foreach ($category as $key) {
							$id = $key['_id'];
							$categoryName = $key['categoryName'];

						?>
					    	<option value = "<?php echo $id; ?>">
					    	<?php echo $categoryName;?>
					    	</option>
					    <?php }?>
					 </select>
				</div>
				<div class="col-md-3 col-xs-12">
					<center><h4>subCategory</h4></center>
					<select class="form-control" id="sel2" disabled="disabled">
					<?php foreach ($listFirstsubCategory as $key) {
							$id = $key['_id'];
							$subname = $key['subname'];
						?>
					    	<option value = "<?php echo $id; ?>">
					    	<?php echo $subname;?>
					    	</option>
					    <?php }?>
					 </select>
				</div>
				<div class="col-md-3 col-xs-12">
					<center><h4>Action</h4></center>
					<select class="form-control" id="sel3">
						<option value="1">Message</option>
						<option value="0">Add Product</option>
					</select>						
				</div>

				<div class="col-md-3 col-xs-12">
					<center><h4>Execute</h4></center>
					<center><button type="button" class="btn btn-success" id="public" >Public</button></center>
				</div>
			</div>
		</div>

		<div class="row" id="data" style="margin-top: 5%;">
			<div class="col-md-12 data" id="message">
				
				<div class="col-md-8 col-xs-12" >
					 <label for="comment">Tiêu đề:</label>
					<input type="text" class="form-control" id="message_title" placeholder="Nhập tiêu đề tại đây">
				</div>

				<div class="col-md-8 col-xs-12">
					<div class="form-group">
					  <label for="comment">Nội dung:</label>
					  <textarea class="form-control" rows="15" id="message_body"></textarea>
					</div>
				</div>

				<div class="col-md-4 col-xs-12" id="thongbao" style="display: none">
					<div class="alert alert-success alert-dismissable">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Success!</strong> Indicates a successful or positive action.
					</div>
				</div>



			</div>



		</div>


	</div>
</body>
</html>