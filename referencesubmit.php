<?php

	include 'config.php';

	if(!($_SERVER["REQUEST_METHOD"] == "POST")) {
		die(header('Location: index.html'));
	}
	
	if(empty($_POST['text'])) {
		die(header('Location: index.html'));
	}

	$text = nl2br(htmlentities($_POST['text'], ENT_QUOTES, 'UTF-8'));
	$domain = nl2br(htmlentities($_POST['domain'], ENT_QUOTES, 'UTF-8'));

	$query = "INSERT INTO `reference` (text, domain, type) VALUES ('$text', '$domain', 'text')";

	if(!mysqli_query($link, $query)){
		die(mysqli_error($link));
	} else {
		header('Location: references.php');
	}

	mysqli_close($link);
?>