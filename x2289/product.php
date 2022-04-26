<?php
require_once ('db/dbhelper.php');
require_once ('utils/utility.php');

$page = 1;
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}
if ($page <= 0) {
	$page = 1;
}

$currentIndex = ($page-1)*PAGE_NUMBER_MAX;
$s            = getGet('s');

if (!empty($s)) {
	$sql = "select * from products where title like '%$s%' or content like '%$s%' limit $currentIndex, " .PAGE_NUMBER_MAX;

	$sqlCount = "select count(*) as 'Total' from products where title like '%$s%' or content like '%$s%' ";
} else {
	$sql      = "select * from products limit $currentIndex, " .PAGE_NUMBER_MAX;
	$sqlCount = "select count(*) as 'Total' from products";
}
$results = executeResult($sql);
// echo $sqlCount;
// die();
$data     = executeResult($sqlCount);
$total    = $data[0]['Total'];
$numPages = ceil($total/PAGE_NUMBER_MAX);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Product List</h2>
			</div>
			<div class="panel-body">
				<form method="get">
					<input type="text" name="s" placeholder="Enter searching .." class="form-control" style="width: 200px">
				</form>
				<table class="table table-bordered" style="margin-top: 10px;">
					<thead>
						<tr>
							<th>No</th>
							<th>Thumbnail</th>
							<th>Title</th>
							<th>Updated At</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
<?php
$counter = 0;
foreach ($results as $item) {
	echo '<tr>
			<td>'.(++$counter).'</td>
			<td><img src="'.$item['thumbnail'].'" style="width: 120px"/></td>
			<td>'.$item['title'].'</td>
			<td>'.$item['updated_at'].'</td>
			<td></td>
			<td></td>
		</tr>';
}
?>
</tbody>
				</table>
<ul class="pagination">
<?php
if ($page > 1) {
	echo '<li class="page-item"><a class="page-link" href="?s='.$s.'&page='.($page-1).'">Previous</a></li>';
}

$pageAvaiable = [1, 2, $page-1, $page, $page+1, $numPages-1, $numPages];
$isFirst      = false;
$isBefore     = false;

for ($i = 1; $i <= $numPages && $numPages > 1; $i++) {
	if (!in_array($i, $pageAvaiable)) {
		if ($i < $page && !$isFirst) {
			echo '<li class="page-item"><a class="page-link" href="?s='.$s.'&page='.($page-2).'">...</a></li>';
			$isFirst = true;
		}
		if ($i > $page && !$isBefore) {
			echo '<li class="page-item"><a class="page-link" href="?s='.$s.'&page='.($page+2).'">...</a></li>';
			$isBefore = true;
		}
		continue;
	}

	if ($i == $page) {
		echo '<li class="page-item active"><a class="page-link" href="?s='.$s.'&page='.$i.'">'.$i.'</a></li>';
	} else {
		echo '<li class="page-item"><a class="page-link" href="?s='.$s.'&page='.$i.'">'.$i.'</a></li>';
	}
}
if ($page < $numPages) {
	echo '<li class="page-item"><a class="page-link" href="?s='.$s.'&page='.($page+1).'">Next</a></li>';
}
?>

</ul>
			</div>
		</div>
	</div>
</body>
</html>