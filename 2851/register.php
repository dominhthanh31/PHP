<?php
session_start();

$fullname = $birthday = $email = $address = $pwd = "";

if(!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$birthday = $_POST['birthday'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$pwd = $_POST['pwd'];

	$_SESSION['fname'] = $fullname;
	$_SESSION['birthday'] = $birthday;
	$_SESSION['email'] = $email;
	$_SESSION['address'] = $address;
	$_SESSION['pwd'] = $pwd;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<form method="post">
		<div class="form-group">
			<label>Full Name: </label>
			<input required type="text" name="fullname" class="form-control">
		</div>
		<div class="form-group">
			<label>Birthday: </label>
			<input type="date" name="birthday" class="form-control">
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input required type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Address: </label>
			<input type="text" name="address" class="form-control">
		</div>
		<div class="form-group">
			<label>Password: </label>
			<input required type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<p>
				<a href="login.php">I have a account</a>
			</p>
			<button class="btn btn-success">Register</button>
		</div>
	</form>
</div>
</body>
</html>