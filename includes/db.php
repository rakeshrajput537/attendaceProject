<?php
$servername = "localhost";
$username = "weblab";
$password = "weblab";
$dbname = "weblab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>