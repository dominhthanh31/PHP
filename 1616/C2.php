<?php
$fullname = $email = $pwd = "";
if(!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quan Ly Sinh Vien</title>
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
	<h1 class="text-center">Quan Ly Sinh Vien</h1>
	<div class="card">
		<div class="card-header bg-info">
			Danh Sach Sinh Vien
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Password</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td><?=$fullname?></td>
						<td><?=$email?></td>
						<td><?=$pwd?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="card" style="margin-top: 20px">
		<div class="card-header bg-info">
			Nhap Thong Tin Sinh Vien
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label>Full Name</label>
					<input required type="text" name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input required type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input required type="password" name="pwd" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-info">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>