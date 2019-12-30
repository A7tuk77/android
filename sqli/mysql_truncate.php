<?php

$server_name="localhost";
	$username="root";
	$password="";
	$db_name="sqli";

	$db=mysqli_connect($server_name,$username,$password,$db_name);

	if(!$db) die("Connection problem, try again later");
	// if there is a connection


		$query="TRUNCATE TABLE users";
		echo $query;
		$result=mysqli_query($db,$query);
		if($result) echo "All Data Deleted";
		else mysqli_error($db);


	mysqli_close($db);
?>
