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

	$title = nl2br(htmlentities($_POST['title'], ENT_QUOTES, 'UTF-8'));
	$domain = nl2br(htmlentities($_POST['domain'], ENT_QUOTES, 'UTF-8'));
	$history = nl2br(htmlentities($_POST['history'], ENT_QUOTES, 'UTF-8'));
	$problem = nl2br(htmlentities($_POST['problem'], ENT_QUOTES, 'UTF-8'));
	$samplei = nl2br(htmlentities($_POST['samplei'], ENT_QUOTES, 'UTF-8'));
	$sampleo = nl2br(htmlentities($_POST['sampleo'], ENT_QUOTES, 'UTF-8'));
	$explanation = nl2br(htmlentities($_POST['explanation'], ENT_QUOTES, 'UTF-8'));
	$code = nl2br(htmlentities($_POST['code'], ENT_QUOTES, 'UTF-8'));
	$other = nl2br(htmlentities($_POST['other'], ENT_QUOTES, 'UTF-8'));

	$query = "INSERT INTO `code` (title, domain, problem, samplei, sampleo, explanation, code, other, history) VALUES ('$title', '$domain', '$problem', '$samplei', '$sampleo', '$explanation', '$code', '$other', '$history')";

	if(!mysqli_query($link, $query)){
		die(mysqli_error($link));
	} else {
		header('Location: codes.php');
	}

	mysqli_close($link);
?>