<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$array = [];
$n = rand(1,100);
for ($i=0; $i < $n ; $i++) { 
	$array ['Book'.$i] ['Name'] = 'Quyển Sách'.$i;
	$array ['Book'.$i] ['Author'] = 'Tác Giả'.$i;
	$array ['Book'.$i] ['Price'] = $i.'00';
	$array ['Book'.$i] ['Publishing Company'] = 'NXB'.$i;
}
foreach ($array as $key => $value) {
	echo $key . ':' . '<br>';
	foreach ($value as $key1 => $value1) {
		echo '  -' . $key1 . ' : ' . $value1;
		echo '<br>'; 
	}
 echo '<br>';
}
?>
</div>
</body>
</html>