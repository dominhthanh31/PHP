<?php
session_start();

require_once('utils/utility.php');
require_once('db/dbhelper.php');

if(checkLogin()) {
	header('Location: gift.php');
	die();
}

$fullname = $email = $pwd = "";
if(!empty($_POST)) {
	$email = getPost('email');
	$pwd = getPost('pwd');
	$pwd = getMD5Security($pwd);

	$sql = "select * from users where email = '$email' and password = '$pwd'";
	$data = executeResult($sql, true);
	if($data == null) {
		echo 'Login failed';
	} else {
		$_SESSION['currentUser'] = $data;

		$token = getMD5Security($data['email'].time()).$data['id'];

		setcookie('token', $token, time() + 7*24*60*60, '/');

		$sql = "update users set token = '$token' where id = ".$data['id'];
		execute($sql);
		
		header('Location: gift.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}

		.card {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<form method="post">
		<div class="form-group">
			<label>Email: </label>
			<input required type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Password: </label>
			<input required type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<p>
				<a href="register.php">Create a new account</a>
			</p>
			<button class="btn btn-success">Login</button>
		</div>
	</form>
</div>
</body>
</html>