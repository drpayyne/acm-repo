<?php

	if(!($_SERVER["REQUEST_METHOD"] == "POST")) {
		header('Location: index.html');
	} 

	define('DB_NAME', 'acm');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_HOST', 'localhost');

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
	if(!$link) {
		die("Error connecting to DB");
	}
	$db = mysqli_select_db($link, DB_NAME);
	if(!$db) {
		die("Error connecting to database");
	}

	$title = nl2br(htmlentities($_POST['title'], ENT_QUOTES, 'UTF-8'));
	$domain = nl2br(htmlentities($_POST['domain'], ENT_QUOTES, 'UTF-8'));
	$problem = nl2br(htmlentities($_POST['problem'], ENT_QUOTES, 'UTF-8'));
	$samplei = nl2br(htmlentities($_POST['samplei'], ENT_QUOTES, 'UTF-8'));
	$sampleo = nl2br(htmlentities($_POST['sampleo'], ENT_QUOTES, 'UTF-8'));
	$explanation = nl2br(htmlentities($_POST['explanation'], ENT_QUOTES, 'UTF-8'));
	$code = nl2br(htmlentities($_POST['code'], ENT_QUOTES, 'UTF-8'));
	$other = nl2br(htmlentities($_POST['other'], ENT_QUOTES, 'UTF-8'));

	$query = "INSERT INTO `question-tech-code` (title, domain, problem, samplei, sampleo, explanation, code, other) VALUES ('$title', '$domain', '$problem', '$samplei', '$sampleo', '$explanation', '$code', '$other')";

	if(!mysqli_query($link, $query)){
		die(mysqli_error($link));
	} else {
		header('Location: index.html');
	}

	mysqli_close($link);
?>