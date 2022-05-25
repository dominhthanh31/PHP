<?php
	if(!empty($_POST)) {
		require_once('dbhelper.php');

		$listName = $sql = '';
		if(isset($_POST['listName'])) {
			$listName = $_POST['listName'];
		}

		$sql = "INSERT INTO productlist(name) VALUES ('$listName')";

		execute($sql);

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fruits Shop</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header bg-primary text-white">
			    DANH MỤC SẢN PHẨM
			</div>

			<div class="card-body">
				<form action="" method="POST">
					<div class="form-group">
		    			<label for="UserName">Tên</label>
		    			<input type="text" class="form-control" name="listName">
		  			</div>
				 	<button type="submit" class="btn btn-primary">Tạo</button>  	
				</form>
			</div>
		</div>
	</div>
</body>