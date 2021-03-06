<?php 
	require 'config.php';
	$query = "SELECT * FROM `reference` WHERE 1";
	$result = mysqli_query($link, $query);

	function printTextCard($row) {
		echo '<li class="list-group-item flex-column align-items-start">
			<div class="d-flex w-100 justify-content-between align-items-center">
				<p class="mb-1">'.$row['text'].'</p>
				<small>'.$row['date'].'</small>
			</div>
			<p class="mb-1">'.$row['domain'].'</p>
		</a>';
	}

	function printLinkCard($row) {
		echo '<a href="reference.php?file='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start">
			<div class="d-flex w-100 justify-content-between">
				<h5 class="mb-1">'.$row['text'].'</h5>
				<small>'.$row['date'].'</small>
			</div>
			<p class="mb-1">'.$row['domain'].'</p>
		</a>';
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
			<div id="list-group">
					<?php
						while($row = $result->fetch_assoc()) {
							if($row['type'] == 'file') {
								printLinkCard($row);
							} else if($row['type'] == 'text') {
								printTextCard($row);
							}
						}
					?>
			</div>
		</div>
  	</body>
</html>