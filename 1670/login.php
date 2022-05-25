<?php
session_start();

require_once('dbhelper.php');

if(!empty($_POST)) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "select * from users where email = '$email' and password = '$pwd'";
	$user = executeResult($sql, true);

	if($user != null) {
		$_SESSION['cUser'] = $user;
		
		header('Location: books.php');
		die();
	}
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
		<label>Email: </label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Password: </label>
		<input type="password" name="pwd" class="form-control">
	</div>
	<div class="form-group">
		<p>
			<a href="signup.php">Create a new account</a>
		</p>
		<button class="btn btn-success">Register</button>
	</div>
</form>
</body>
</html>