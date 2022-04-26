<?php
session_start();

require_once('utils/utility.php');
require_once('db/dbhelper.php');

if(!checkLogin()) {
	header('Location: login.php');
	die();
}

$sql = "select * from gift";
$giftList = executeResult($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gift Page</title>
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
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Thumbnail</th>
				<th>Price</th>
				<th>Updated At</th>
			</tr>
		</thead>
		<tbody>
<?php
$index = 0;
foreach($giftList as $item) {
	echo '<tr>
			<td>'.(++$index).'</td>
			<td>'.$item['title'].'</td>
			<td><img src="'.$item['thumbnail'].'" style="width: 120px"/></td>
			<td>'.number_format($item['price'], 0).'</td>
			<td>'.getTimeFormat($item['updated_at']).'</td>
		</tr>';
}
?>
		</tbody>
	</table>
</div>
</body>
</html>