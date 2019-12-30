<?php
include_once ('conn.php');

$email  = $_GET['email'];

$sql = "SELECT * FROM users where email like '%$email%'";

$res = mysqli_query($conn,$sql);

$result = array();

while($row = mysqli_fetch_array($res)){
array_push($result,array(
  'id'=>$row[0],
'name'=>$row[1],
'phone'=>$row[2],
'email'=>$row[3]

));
}

echo json_encode(array("result"=>$result));

mysqli_close($conn);
?>