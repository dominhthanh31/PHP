<?php
require_once ('config.php');

/**
 * Su dung voi cau lenh query: insert, update, delete -> ko tra ve ket qua.
 */
function execute($sql) {
	//Mo ket noi toi database
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//Xu ly cau query
	mysqli_query($conn, $sql);

	//Dong ket noi database
	mysqli_close($conn);
}

/**
 * Su dung voi cau lenh query: select.
 */
function executeResult($sql) {
	//Mo ket noi toi database
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	// echo $sql;
	//Xu ly cau query
	$resultset = mysqli_query($conn, $sql);
	// var_dump($resultset);
	// die();
	$data = [];
	while (($row = mysqli_fetch_array($resultset, 1)) != null) {
		$data[] = $row;
	}
	/**
	 * TH: param2 = 1
	 * $row = [
	 * 		'id' => 1,
	 * 		'title' => '1 - Android Tivi Sony 4K 55 inch KD-55X8000H',
	 * 		'thumbnail' => '12321',
	 * 		...
	 * ];
	 *
	 * TH: param2 = 2
	 * $row = [1, '1 - Android Tivi Sony 4K 55 inch KD-55X8000H', '12321', ...];
	 */

	//Dong ket noi database
	mysqli_close($conn);

	return $data;
}