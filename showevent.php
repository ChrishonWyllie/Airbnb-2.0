<?php

	include("connection.php");
	
	
	$eventquery = "SELECT * FROM event";
	
	if($result = mysqli_query($link, $eventquery)) {

	while ($row = mysqli_fetch_array($result)) {
	
	print_r($row['name']." ");
	print_r($row['desc']." ");
	print_r($row['date']." ");
	print_r('<br />');
	


		}

?>