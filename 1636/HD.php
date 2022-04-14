<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sap Xep Mang Trong PHP</title>
</head>
<body>
<h1>Sinh Ngau Nhien Mang Gom N Phan Tu</h1>
<?php
//Sinh ngẫu nhiên so phan tu trong mang N
$n = rand(1, 100);

//Sinh ngau nhien cac phan tu trong mang
$arr = []; //Khai bao 1 mang rong
for ($i=0; $i < $n; $i++) {
	$r = rand(1, 100); //sinh ngau nhien so tu nhien $r = 1 -> 100
	$arr[] = $r; //Them 1 phan tu vao trong mang
}

//Sap xep cac phan tu trong mang theo thu tu tang dan
sort($arr); //Sap xep tang dan
// rsort($arr); //Sap xep giam dan

//Hien thi
for ($i=0; $i < $n; $i++) {
	echo $arr[$i].'<br/>';
}
?>
</body>
</html>