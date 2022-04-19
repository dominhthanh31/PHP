<?php
session_start();

$email = $pwd = "";

if(!empty($_POST)) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sEmail = $sPwd = "";
	if(isset($_SESSION['email'])) {
		$sEmail = $_SESSION['email'];
	}
	if(isset($_SESSION['email'])) {
		$sPwd = $_SESSION['pwd'];
	}

	if($email == $sEmail && $pwd == $sPwd) {
		header('Location: show.php');
		die();
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