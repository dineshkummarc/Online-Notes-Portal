<?php
	//Connect to the database
	$link = mysqli_connect("localhost", "root", "", "onlinenotes");

	//Checking for Connection errors
	if(mysqli_connect_error()){
		die("ERROR! Unable to connect: " . mysqli_connect_error());
	}
?>