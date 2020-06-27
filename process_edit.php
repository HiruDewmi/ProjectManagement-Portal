
<?php

$ID = $_POST['ID'];
$project_name = $_POST['project_name'];
$project_manager = $_POST['project_manager'];
$business_owner = $_POST['business_owner'];
$start_date = $_POST['start_date'];
$end_date = $_POST['expected_end_date'];
$resources = $_POST['technical_resources'];


require("db_con.php");

$sql = "UPDATE `project_info` SET `project_name`='$project_name',`project_manager`='$project_manager',`business_owner`='$business_owner',`start_date`='$start_date',`expected_end_date`='$end_date',`technical_resource`='$resources',`status`='Edited' WHERE ID=$ID";
$result = $conn->query($sql);
$conn->close();


if ($result == 1) {
    echo "<script>
alert('Data Edited successefully !');
window.location.href = 'update.php';
</script>";
} else {
    echo "<script>
alert('Data Edit failed. Please try again!');
window.location.href = 'update.php';
</script>";
}
?>