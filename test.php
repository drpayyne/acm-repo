<?php
	require 'config.php';
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d G:i:s');
	$query = "SELECT * FROM `code` WHERE 1";
	$result = mysqli_query($link, $query);
	while($row = $result->fetch_assoc()) {
		echo $row['id'].'<br>';
	}
	echo $date;
?>