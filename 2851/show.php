<?php
session_start();

$fullname = $birthday = $email = $address = $pwd = "";

if(isset($_SESSION['fname'])) {
	$fullname = $_SESSION['fname'];
}
if(isset($_SESSION['birthday'])) {
	$birthday = $_SESSION['birthday'];
}
if(isset($_SESSION['email'])) {
	$email = $_SESSION['email'];
}
if(isset($_SESSION['address'])) {
	$address = $_SESSION['address'];
}
if(isset($_SESSION['pwd'])) {
	$pwd = $_SESSION['pwd'];
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
	<ul>
		<li>Full Name: <?=$fullname?></li>
		<li>Birthday: <?=$birthday?></li>
		<li>Email: <?=$email?></li>
		<li>Pwd: <?=$pwd?></li>
		<li>Address: <?=$address?></li>
	</ul>
</div>
</body>
</html>