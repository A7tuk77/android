<?php
	$server_name="localhost";
	$username="root";
	$password="";
	$db_name="sqli";
	$db=mysqli_connect($server_name,$username,$password,$db_name);
	if(!$db) die("Connection problem, try again later");


	$sql = "select * from users;";
	$result = $db->query($sql);
	$array = array();
	while($row = $result->fetch_assoc()){
		array_push($array,$row);
	}
	echo json_encode($array);
?>
