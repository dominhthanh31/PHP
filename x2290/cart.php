<?php
require_once ('dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>cart Page</title>
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
	   <div class="card-body">
                                   
	<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>minh họa</th>
							<th>tên sản phẩm</th>
							<th>số lượng</th>
							<th style="width: 50px;"></th>
							<th style="width: 50px;"></th>
						</tr>
					</thead>
					<tbody>
<?php
$count = 0;
$cart = json_decode($_COOKIE["cart"]);
foreach ($cart as $item) {
$id = $item->id . PHP_EOL;
 
$sql      = "select * from products where id = ".$id;
$items = executeResult($sql);
$items = $items[0];
	echo '<tr>
			<td>'.(++$count).'</td>
			<td><img src="'.$items['thumbnail'].'" style="width: 80px"></td>
			<td>'.$items['title'].'</td>

			<td>'.$item->num . PHP_EOL.'</td>
			<td><button class="btn btn-warning">Edit</button></td>
			<td><button class="btn btn-danger" onclick="deleteUsers(\''.$items['id'].'\')">Delete</button></td>
		</tr>';
}
?>
					</tbody>
				</table>



                                   
                </div>
</div>
<script type="text/javascript">
	function deleteUsers(username) {
		option = confirm('Are you sure to delete this user?')
		if(!option) return

		$.post('form-delete.php', {
			'username': username
		}, function(data) {//callback -> khi du lieu dc tra ve tu server
			location.reload() //load website -> khong load cung dc -> su dung jquery de update data -> tuy vao nghiep cua du an.
		})
	}
</script>
</body>
</html>