<?php

$server_name="localhost";
	$username="root";
	$password="";
	$db_name="sqli";

$db=mysqli_connect($server_name,$username,$password,$db_name);

if(!$db) die("Connection problem, try again later");
// if there is a connection

if(isset($_POST['name']) && isset($_POST['phone'])&&isset($_POST['email']) && isset($_POST['userid']) && isset($_POST['operation'])){
		$user=$_POST['name'];
		$pass=$_POST['phone'];
		$email=$_POST['email'];
	//	$user="Mater";
		//$pass="mmaater123@gmail.com";
		if($_POST['operation'] == "insert")
		{
		$query="INSERT INTO users (name,phone,email) values ('$user','$pass','$email')";
		echo $query;
		$result=mysqli_query($db,$query);
		if($result) echo "INSERTED A NEW USER";
		else mysqli_error($db);
		}
		else if($_POST['operation'] == "update")
		{
		$userid = $_POST['userid'];
		$query="UPDATE users set name ='$user' ,phone ='$pass' ,email ='$email' WHERE id = '$userid'";
		echo $query;
		$result=mysqli_query($db,$query);
		if($result) echo "USER UPDATED";
		else mysqli_error($db);
		}

	}

if(isset($_POST['operation']) && isset($_POST['userid']) && $_POST['operation'] == "delete"){
		$delete=$_POST['userid'];
		$query="DELETE FROM users WHERE id='$delete'";
		echo $query;
		$result=mysqli_query($db,$query);
		if($result) echo "Delete A NEW USER";
		else mysqli_error($db);

	}


	mysqli_close($db);
?>
