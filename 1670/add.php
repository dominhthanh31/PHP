<?php
session_start();

require_once('dbhelper.php');

if(!empty($_POST)) {
	$title = $_POST['title'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	$nsx = $_POST['nsx'];

	$sql = "insert into book(title, author, price, nsx) values ('$title', '$author', '$price', '$nsx')";
	execute($sql);

	header('Location: books.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Book Page</title>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<form method="post">
	<div class="form-group">
		<label>Title: </label>
		<input type="text" name="title" class="form-control">
	</div>
	<div class="form-group">
		<label>Author: </label>
		<input type="text" name="author" class="form-control">
	</div>
	<div class="form-group">
		<label>Price: </label>
		<input type="number" name="price" class="form-control">
	</div>
	<div class="form-group">
		<label>NSX: </label>
		<input type="text" name="nsx" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-success">Save</button>
	</div>
</form>
</body>
</html>