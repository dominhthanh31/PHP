<?php
$username = $email = $password = '';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thong tin nguoi dung</title>
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

	<div class="container">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Tên tài khoản</th>
						<th>Email</th>
						<th>Mật khẩu</th>
                        <th></th>
					</tr>
				</thead>
                <tbody>
                    <tr>
                        <td><?=$username?></td>
                        <td><?=$email?></td>
                        <td><?=$password?>
                        <td><a href="input.php" class="btn btn-warning">edit</a></td></td>
                    </tr>
                </tbody>
			</table>
	</div>;


</body>
</html>