<?php
	define('DB_NAME', 'acm');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_HOST', 'localhost');

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if(!$link) {
		die("Error connecting to DB");
	}
?>