<?php

require("db_con.php");

$sql = "SELECT `ID`, `project_name`, `project_manager`, `business_owner`, date(`start_date`) as start_date, date(`expected_end_date`) as expected_end_date, `technical_resource`, `status` FROM `project_info`";
$result = $conn->query($sql);
$conn->close();
?>