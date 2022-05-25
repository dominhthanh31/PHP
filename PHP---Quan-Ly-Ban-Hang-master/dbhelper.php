<?php
require_once('config.php');

function execute($sql) {
	//Connection
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

	//Query
	mysqli_query($con, $sql);

	//Close connection
	mysqli_close($con);
}

function executeResult($sql) {
	//Connection
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

	//Query
	$result = mysqli_query($con, $sql);

	//Result
	$data = [];

	while ($row = mysqli_fetch_array($result, 1)) {
		$data[] = $row;
	}

	//Close connection
	mysqli_close($con);

	return $data;
}
?>