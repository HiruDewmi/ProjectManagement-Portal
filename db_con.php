<?php

$servername = "localhost";
$uname = "root";
$passwd = "";
$dbname = "project_details";

// Create connection
$conn = new mysqli($servername, $uname, $passwd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>