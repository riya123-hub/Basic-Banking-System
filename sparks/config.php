<?php

	$conn = mysqli_connect('localhost','root','riya','sparks_bank');

	if(!$conn){
		die("The server not able to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>