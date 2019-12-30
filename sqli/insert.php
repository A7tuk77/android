<?php
include_once('conn.php');

$field1_name=$_POST['field1-name'];
$field2_name=$_POST['field2-name'];
$field3_name=$_POST['field3-name'];
echo "$field1_name:".$field1_name;

$query = "INSERT INTO sqli.users VALUES
('','$field1_name','$field2_name','$field3_name)";
$query2 = "Select * from sqli.users";
$answer = mysqli_query($conn,$query2);
$row = mysqli_fetch_assoc($answer);
foreach ($row as $r)
	echo "Answer: ".$r;
?>


