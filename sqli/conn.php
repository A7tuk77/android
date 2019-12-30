<?php
$url = "localhost:3306";
$username = "root";
$password = "";
$dbname = "sqli";

// Create connection
$conn = new mysqli($url, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 