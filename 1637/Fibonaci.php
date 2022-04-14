<!DOCTYPE html>
<html>
<head>
	<title>Fibonaci</title>
	<meta charset="utf-8">
</head>
<body>
<!-- Basic -->
<?php
	$f0 = $f1 = 1;
	$num = 10;

	//B1. Dung cach thong thuong
	echo "<h3>Day Fibonaci (C1)</h3><br/>";
	echo "$f0 $f1";
	for ($i=0; $i < $num - 2; $i++) {
		$fn = $f0 + $f1;
		echo " $fn";
		$f0 = $f1;
		$f1 = $fn;
	}

	//B2. In day Fibonaci.
	//Tinh so fibonaci tai vi tri thu $n -> De quy khong nho.
	$count = 0;
	function fibonaci($n) {
		if($n == 0 || $n == 1) return 1;
		global $count;
		$count++;
		return fibonaci($n - 1) + fibonaci($n - 2);
	}
	//fibonaci(0) -> 1, fibonaci(1) -> 1
	//fibonaci(2) = fibonaci(1) + fibonaci(0) = 1 + 1 = 2
	//fibonaci(3) = fibonaci(2) + fibonaci(1)
	//			  = fibonaci(1) + fibonaci(0) + 1
	//			  = 1 + 1 + 1 = 3
	//fibonaci(4) = fibonaci(3) + fibonaci(2)
	//			  = fibonaci(2) + fibonaci(1) + fibonaci(1) + fibonaci(0)
	//			  = fibonaci(1) + fibonaci(0) + 1 + 1 + 1
	//			  = 1 + 1 + 3 = 5

	echo "<h3>Day Fibonaci (C2)</h3><br/>";
	for ($i=0; $i < $num; $i++) {
		$f = fibonaci($i);
		echo "$f ";
	}
	echo "<br/>count = $count<br/>";

	//B2: In day Fibonaci -> Su dung de quy co nho
	$data = [1, 1]; //fibonaci(0) = 1, fibonaci(1) = 1
	$count = 0;
	function fibonaci2($n) {
		global $count, $data;
		if(isset($data[$n])) return $data[$n];
		$count++;
		$s = fibonaci2($n - 1) + fibonaci2($n - 2);
		$data[$n] = $s;
		// echo "$n - $s<br/>";
		return $s;
	}
	// var_dump($data);
	echo "<h3>Day Fibonaci (C3)</h3><br/>";
	for ($i=0; $i < $num; $i++) {
		$f = fibonaci2($i);
		echo "$f ";
	}
	echo "<br/>count = $count<br/>";
?>
</body>
</html>