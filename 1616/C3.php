<?php
$fullnameList = $emailList = $pwdList = [];

if(!empty($_POST)) {
	$fullnameList = $_POST['fullname'];
	$emailList = $_POST['email'];
	$pwdList = $_POST['pwd'];
}
// var_dump($_POST);
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
<?php
for($i=0;$i<count($fullnameList);$i++) {
	echo '<tr>
			<td>'.($i+1).'</td>
			<td>'.$fullnameList[$i].'</td>
			<td>'.$emailList[$i].'</td>
			<td>'.$pwdList[$i].'</td>
		</tr>';
}
?>
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
<?php
foreach ($fullnameList as $value) {
	echo '<input required type="text" name="fullname[]" class="form-control" value="'.$value.'" style="display: none">';
}
?>
					<input required type="text" name="fullname[]" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
<?php
foreach ($emailList as $value) {
	echo '<input required type="text" name="email[]" class="form-control" value="'.$value.'" style="display: none">';
}
?>
					<input required type="email" name="email[]" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
<?php
foreach ($pwdList as $value) {
	echo '<input required type="text" name="pwd[]" class="form-control" value="'.$value.'" style="display: none">';
}
?>
					<input required type="password" name="pwd[]" class="form-control">
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