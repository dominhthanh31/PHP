<?php

$username = $email = $password='';

if(!empty($_POST)){
		if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
		if(isset($_POST['email'])){
		$email= $_POST['email'];
	}
		if(isset($_POST['password'])){
		$password = $_POST['password'];
	}

	if(!empty($username) && !empty($password)){

		header('Location: welcome.php');
	
	}	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>TEST DANG PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
?>
	<div class="container" >	
		<div class="panel panel-primary">
					<div class="panel-heading">
					<h2>Input detailt information</h2>
					</div>
				<div class="panel-body">
					<form method="post" action="welcome.php">
					<div class="form-group">	
					 	<label>User Name</label>
					 	<input required="true" type="username" name="username" class="form-control" id="username" value="<?=$username?>">
					 </div>
					 <div class="form-group">	
						 <label>Email</label>
						 <input required="true" type="email" name="email" class="form-control" id="email" value="<?=$email?>">
					 </div>
					 <div class="form-group">	
						 <label>Password</label>
						 <input required="true" type="password" name="password" class="form-control" id="password" value="<?=$password?>">
					 </div>
					 <div>
					 	<button type="submit" class="btn btn-primary">Register</button>
					 	<button type="reset" class="btn btn-warning">Reset</button>
					 </div>
					 </form>	
				</div>
		</div>
	</div>
</body>
</html>