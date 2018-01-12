<?php

	include 'config.php';

	if(!($_SERVER["REQUEST_METHOD"] == "POST")) {
		die(header('Location: index.html'));
	}
	
	if(empty($_POST['domain'])) {
		die(header('Location: index.html'));
	}

	$title = nl2br(htmlentities($_POST['title'], ENT_QUOTES, 'UTF-8'));
	$domain = nl2br(htmlentities($_POST['domain'], ENT_QUOTES, 'UTF-8'));
	$question = nl2br(htmlentities($_POST['question'], ENT_QUOTES, 'UTF-8'));
	$answer = nl2br(htmlentities($_POST['answer'], ENT_QUOTES, 'UTF-8'));
	$other = nl2br(htmlentities($_POST['other'], ENT_QUOTES, 'UTF-8'));
	$history = nl2br(htmlentities($_POST['hiatory'], ENT_QUOTES, 'UTF-8'));

	$query = "INSERT INTO `noncode` (title, domain, question, answer, other, history) VALUES ('$title', '$domain', '$question', '$answer', '$other', '$history')";

	if(!mysqli_query($link, $query)){
		die(mysqli_error($link));
	} else {
		header('Location: noncodes.php');
	}

	mysqli_close($link);
?>