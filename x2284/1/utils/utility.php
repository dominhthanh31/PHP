<?php
function getPost($key, $special = "'") {
	$value = '';
	if(isset($_POST[$key])) {
		$value = $_POST[$key];

		//Huy ky tu dac biet trong $value
		$value = str_replace($special, "\\".$special, $value);
	}

	return $value;
}

function getGet($key, $special = "'") {
	$value = '';
	if(isset($_GET[$key])) {
		$value = $_GET[$key];

		//Huy ky tu dac biet trong $value
		$value = str_replace($special, "\\".$special, $value);
	}

	return $value;
}

function getMD5Security($pwd) {
	return md5(md5($pwd).'SDFKJH8907jgjgs8*(&(87234');
}

function checkLogin() {
	if(isset($_SESSION['currentUser']) && $_SESSION['currentUser'] != null) {
		//B1) SESSION dang keep login
		return true;
	}

	//B2) Mat ket noi login trong session
	if(isset($_COOKIE['token'])) {
		$token = $_COOKIE['token'];

		$sql = "select * from users where token = '$token'";
		$data = executeResult($sql, true);

		if($data != null) {
			$_SESSION['currentUser'] = $data;
			return true;
		}
	}

	return false;
}

function getTimeFormat($str) {
	$date = new DateTime($str);
	return $date->format('H:i d/m/Y');
}