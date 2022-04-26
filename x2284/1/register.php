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
	$fullname = getPost('fullname');
	$email = getPost('email');
	$pwd = getPost('pwd');
	$pwd = getMD5Security($pwd);

	//Kiem tra xem email da ton tai chua
	$sql = "select * from users where email = '$email'";
	$data = executeResult($sql);
	if($data == null || count($data) == 0) {
		$sql = "insert into users(fullname, email, password) values ('$fullname', '$email', '$pwd')";
		execute($sql);

		header('Location: login.php');
	} else {
		echo 'Email da ton tai';
	}
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
	<form method="post" onsubmit="return validateData();">
		<div class="form-group">
			<label>Full Name: </label>
			<input required type="text" name="fullname" class="form-control">
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input required type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Password: </label>
			<input required type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<label>Confirm Password: </label>
			<input required type="password" name="confirmPwd" class="form-control">
		</div>
		<div class="form-group">
			<p>
				<a href="login.php">I have a account</a>
			</p>
			<button class="btn btn-success">Save</button>
		</div>
	</form>
</div>
<script type="text/javascript">
	function validateData() {
		if($('[name=pwd]').val() != $('[name=confirmPwd]').val()) {
			alert('Password does not match')
			return false
		}
		return true
	}
</script>
</body>
</html>