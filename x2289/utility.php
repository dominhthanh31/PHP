<?php

function getGet($key) {
	if (isset($_GET[$key])) {
		return $_GET[$key];
	}
	return '';
}