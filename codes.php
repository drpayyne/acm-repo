<?php 
	require 'config.php';
	$query = "SELECT * FROM `code` WHERE 1";
	$result = mysqli_query($link, $query);

	function printQ($row) {
		$question = '<div class="row">
			<h6><strong>Problem Statement</strong></h5>
		</div>
		<div class="row">
			<p>'.$row['problem'].'</p>
		</div>';
		if (!(ctype_space($row['samplei'])) && !($row['samplei'] == '')) {
			$question .= '<div class="row">
				<h6><strong>Sample Input</strong></h5>
			</div>
			<div class="row">
				<p>'.$row['samplei'].'</p>
			</div>';
		}
		if (!ctype_space($row['sampleo']) && !($row['sampleo'] == '')) {
			$question .= '<div class="row">
				<h6><strong>Sample Output</strong></h5>
			</div>
			<div class="row">
				<p>'.$row['sampleo'].'</p>
			</div>';
		}
		if (!ctype_space($row['explanation']) && !($row['explanation'] == '')) {
			$question .= '<div class="row">
				<h6><strong>Explanation</strong></h5>
			</div>
			<div class="row">
				<p>'.$row['explanation'].'</p>
			</div>';
		}
		if (!ctype_space($row['code']) && !($row['code'] == '')) {
			$question .= '<div class="row">
				<h6><strong>Code</strong></h5>
			</div>
			<div class="row">
				<p><pre><code>'.$row['code'].'</code></pre></p>
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
		return $question;
	}

	function printCard($row) {
		echo '<div class="card">';
		echo '<div class="card-header" role="tab" id="h'.$row['id'].'">
			<h5 class="mb-0">
				<div class="row">
					<div class="col-6">
						<a data-toggle="collapse" href="#c'.$row['id'].'" role="button" aria-expanded="true" aria-controls="c'.$row['id'].'">'.$row['title'].'</a>
					</div>
					<div class="col">
						'.$row['domain'].'
					</div>
					<div class="col text-muted">
						'.$row['history'].'
					</div>
				</div>
			</h5>
		</div>';
		  
		echo '<div id="c'.$row['id'].'" class="collapse" role="tabpanel" aria-labelledby="h'.$row['id'].'" data-parent="#accordian">
			<div class="card-body">
				'.printQ($row).'
			</div>
		  </div>';
		echo '</div>';
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
			<div id="accordian" role="tablist" >
					<?php
						while($row = $result->fetch_assoc()) {
							printCard($row);
						}
					?>
			</div>
		</div>
  	</body>
</html>