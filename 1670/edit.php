<?php
session_start();

require_once('dbhelper.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	$nsx = $_POST['nsx'];

	$sql = "update book set title = '$title', author = '$author', price = '$price', nsx = '$nsx' where id = $id";
	execute($sql);

	header('Location: books.php');
}

$id = $_GET['id'];
$sql = "select * from book where id = $id";
$book = executeResult($sql, true);
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
		<input type="text" name="title" class="form-control" value="<?=$book['title']?>">
		<input type="text" name="id" class="form-control" value="<?=$book['id']?>" style="display: none;">
	</div>
	<div class="form-group">
		<label>Author: </label>
		<input type="text" name="author" class="form-control" value="<?=$book['author']?>">
	</div>
	<div class="form-group">
		<label>Price: </label>
		<input type="number" name="price" class="form-control" value="<?=$book['price']?>">
	</div>
	<div class="form-group">
		<label>NSX: </label>
		<input type="text" name="nsx" class="form-control" value="<?=$book['nsx']?>">
	</div>
	<div class="form-group">
		<button class="btn btn-success">Save</button>
	</div>
</form>
</body>
</html>