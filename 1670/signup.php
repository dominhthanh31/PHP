<?php
session_start();

require_once('dbhelper.php');

if(!empty($_POST)) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$pwd = $_POST['pwd'];

	$sql = "insert into users(username, email, fullname, phone_number, password) values ('$username', '$email', '$fullname', '$phone', '$pwd')";
	execute($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp Page</title>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<form method="post">
	<div class="form-group">
		<label>User Name: </label>
		<input type="text" name="username" class="form-control">
	</div>
	<div class="form-group">
		<label>Email: </label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Full Name: </label>
		<input type="text" name="fullname" class="form-control">
	</div>
	<div class="form-group">
		<label>Phone Number: </label>
		<input type="tel" name="phone" class="form-control">
	</div>
	<div class="form-group">
		<label>Password: </label>
		<input type="password" name="pwd" class="form-control">
	</div>
	<div class="form-group">
		<p>
			<a href="login.php">I have a account</a>
		</p>
		<button class="btn btn-success">Register</button>
	</div>
</form>
</body>
</html>