<?php
require_once('config.php');

function execute($sql) {
	// B1) Ket noi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	// B2) Insert du lieu vao database
	// echo $sql;die();
	// insert, update, delete
	mysqli_query($conn, $sql);

	// B3) Dong ket noi CSDL
	mysqli_close($conn);
}

function executeResult($sql, $isSingle = false) {
	// B1) Ket noi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	// B2) Insert du lieu vao database
	// echo $sql;die();
	// insert, update, delete
	$resultset = mysqli_query($conn, $sql);

	if($isSingle) {
		$data = mysqli_fetch_array($resultset, 1);
	} else {
		$data = [];
		while(($row = mysqli_fetch_array($resultset, 1)) != null) {
			$data[] = $row;
		}
	}

	// B3) Dong ket noi CSDL
	mysqli_close($conn);

	return $data;
}