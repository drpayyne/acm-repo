<?php

	include 'config.php';

	if(!($_SERVER["REQUEST_METHOD"] == "POST")) {
		die(header('Location: index.html'));
	}
	
	if(empty($_POST['title'])) {
		die(header('Location: index.html'));
	}

	/* echo empty($_POST['title']).'1<br>';
	echo empty($_POST['domain']).'1<br>';
	echo empty($_POST['problem']).'1<br>';
	echo empty($_POST['samplei']).'1<br>';
	echo empty($_POST['sampleo']).'1<br>';
	echo empty($_POST['explanation']).'1<br>';
	echo empty($_POST['other']).'1<br>';
	echo empty($_POST['code']).'1<br>'; */

	$text = nl2br(htmlentities($_POST['text'], ENT_QUOTES, 'UTF-8'));
	$history = nl2br(htmlentities($_POST['history'], ENT_QUOTES, 'UTF-8'));

	$query = "INSERT INTO `hint` (history, text) VALUES ('$history', '$text')";

	if(!mysqli_query($link, $query)){
		die(mysqli_error($link));
	} else {
		header('Location: index.html');
	}

	mysqli_close($link);
?>