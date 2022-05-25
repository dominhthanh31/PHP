<?php
session_start();

require_once('dbhelper.php');

if(!isset($_SESSION['cUser'])) {
	header('Location: login.php');
	die();
}

$sql = "select * from book";
$bookList = executeResult($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Books Page</title>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<a href="add.php"><button>Add Book</button></a>
<table border="1" cellpadding="5">
	<thead>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Author</th>
			<th>Price</th>
			<th>NSX</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php
$index = 0;
foreach($bookList as $item) {
	echo '<tr>
			<td>'.(++$index).'</td>
			<td>'.$item['title'].'</td>
			<td>'.$item['author'].'</td>
			<td>'.$item['price'].'</td>
			<td>'.$item['nsx'].'</td>
			<td>
				<a href="edit.php?id='.$item['id'].'"><button>Edit</button></a>
			</td>
			<td>
				<a href="delete.php?id='.$item['id'].'"><button>Delete</button></a>
			</td>
		</tr>';
}
?>
	</tbody>
</table>
</body>
</html>