<?php
	require 'config.php';

	$id = $_GET['q'];

	$query = "SELECT * FROM `noncode` WHERE id=$id";
	$result = mysqli_query($link, $query);
	$row = $result->fetch_assoc();

	function printQ($row) {
		$question = '<div class="row">
			<h3><strong>'.$row['title'].'</strong></h3>
		</div><br>';
		$question .= '<div class="row">
			<h6><strong>Question</strong></h5>
		</div>
		<div class="row">
			<p>'.$row['question'].'</p>
		</div>';
		if (!(ctype_space($row['answer'])) && !($row['answer'] == '')) {
			$question .= '<div class="row">
				<h6><strong>Answer</strong></h5>
			</div>
			<div class="row">
				<p>'.$row['answer'].'</p>
			</div>';
		}
		if (!ctype_space($row['other']) && !($row['other'] == '')) {
			$question .= '<div class="row">
				<h6><strong>Other</strong></h5>
			</div>
			<div class="row">
				<p>'.$row['other'].'</p>
			</div>';
		}
		echo $question;
	}

?>
<!DOCTYPE html>
<html>
  	<head>
		<title>ACM Repo</title>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap libraries -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  	</head>
  	<body>
		<div class="container" >
			<?php
				printQ($row);
			?>
		</div>
  	</body>
</html>