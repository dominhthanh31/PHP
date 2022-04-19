<?php
session_start();

$productList = [];
for ($i=0; $i < 16; $i++) {
	$productList[] = [
		'id' => $i,
		'title' => 'San Pham '.$i,
		'price' => 1000 + 100 * $i,
		'thumbnail' => 'https://i.redd.it/8a0b3zina8i71.jpg'
	];
}

//Luu du lieu
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}

if(isset($_GET['cart'])) {
	$id = $_GET['cart'];

	$isFind = false;
	for ($i=0; $i < count($_SESSION['cart']); $i++) {
		if($_SESSION['cart'][$i]['id'] == $id) {
			$_SESSION['cart'][$i]['num']++;
			$isFind = true;
			break;
		}
	}
	if(!$isFind) {
		$item = $productList[$id];
		$item['num'] = 1;
		$_SESSION['cart'][] = $item;
	}
}

//id, title, price, thumbnail, num
$cartList = $_SESSION['cart'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POS in PHP</title>
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
	<div class="row">
		<div class="col-md-5">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Thumbnail</th>
						<th>Title</th>
						<th>Num</th>
						<th>Price</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
<?php
$index = 0;
$totalMoney = 0;
foreach ($cartList as $cart) {
	$totalMoney += $cart['num'] * $cart['price'];
	echo '<tr>
				<td>'.(++$index).'</td>
				<td>
					<img src="'.$cart['thumbnail'].'" style="width: 120px">
				</td>
				<td>'.$cart['title'].'</td>
				<td>'.$cart['num'].'</td>
				<td>'.$cart['price'].'</td>
				<td>'.($cart['num'] * $cart['price']).'</td>
			</tr>';
}
?>
				</tbody>
			</table>
			<div class="form-group">
				<label>Total Money: </label>
				<label id="total_money"><?=$totalMoney?></label>
			</div>
			<div class="form-group">
				<label>Money: </label>
				<input type="number" name="money" id="money" class="form-control">
			</div>
			<div class="form-group">
				<label>Cash Back: </label>
				<label id="cash_back">0</label>
			</div>
		</div>
		<div class="col-md-7">
			<div class="row">
<?php
	foreach ($productList as $item) {
		echo '<div class="col-md-3">
					<img src="'.$item['thumbnail'].'" style="width: 100%" onclick="addCart('.$item['id'].')">
					<p>
						Price: '.$item['price'].' VND
					</p>
					<p>'.$item['title'].'</p>
				</div>';
	}
?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function addCart(id) {
		// console.log('id: ' + id)
		window.open('?cart=' + id, '_self');
	}
</script>
</body>
</html>