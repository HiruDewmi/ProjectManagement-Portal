<?php

require("db_con.php");

if (isset($_GET['ID']) && is_numeric($_GET['ID']) && $_GET['ID'] > 0) {

    $id = $_GET['ID'];
    $sql = "SELECT `project_name`, `project_manager`, `business_owner`, date(`start_date`) as start_date, date(`expected_end_date`) as expected_end_date, `technical_resource`, `status` FROM `project_info` WHERE ID=$id";
    $result = $conn->query($sql);
    $conn->close();

    if ($result->num_rows > 0) {// get data from db
        while ($res = $result->fetch_assoc()) {
            $name = $res['project_name'];
            $manager = $res['project_manager']; // show form
            $owner = $res['business_owner'];
            $start = $res['start_date'];
            $end = $res['expected_end_date'];
            $resource = $res['technical_resource'];
        }
    }
}
?>