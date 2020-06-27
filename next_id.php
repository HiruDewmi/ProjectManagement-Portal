<?php

require("db_con.php");

$sql = "SELECT ID FROM project_info ORDER BY ID DESC LIMIT 1";
$result = $conn->query($sql);
$conn->close();
$row = $result->fetch_assoc();
?>