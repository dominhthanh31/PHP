<?php
	$actionList = array("add", "edit", "list", "remove");
	for ($i = 0; $i <= 10; $i++) {
		$studentList[] = [
			'id' => 'Sinh vien'.$i
		];
	}
	
	do {
		$key = $rand_keys = array_rand($actionList,1);
	} while ($key == 2);
    // checck xem key co phai list khong
    echo $actionList[$key];
	
	//print_r(array_rand($actionList,1));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>stdInfo_editor</title>
</head>
<body>

</body>
</html>