<?php

	$servername = "localhost";
	$username = "id16580123_mansibank";
	$password = "Mouli@898765";
	$dbname = "id16580123_mansiproject";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>