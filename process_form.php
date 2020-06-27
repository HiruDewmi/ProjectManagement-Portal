
<?php

$ID = $_POST['ID'];
$project_name = $_POST['project_name'];
$project_manager = $_POST['project_manager'];
$business_owner = $_POST['business_owner'];
$start_date = $_POST['start_date'];
$end_date = $_POST['expected_end_date'];
$resources = $_POST['technical_resources'];


require("db_con.php");

$sql = "INSERT INTO `project_info` (`ID`, `project_name`, `project_manager`, `business_owner`, `start_date`, `expected_end_date`, `technical_resource`, `status`) VALUES (NULL,'$project_name', '$project_manager', '$business_owner', '$start_date', '$end_date', '$resources','Created')";
$result = $conn->query($sql);
$conn->close();

echo "<style>
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #CEE5E8;
  color: #CEE5E8;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
  text-align:center;
}

</style>";

if ($result == 1) {
    echo "<script>
alert('Data uploaded successefully !');
window.location.href = 'interface.php';
</script>";
    //header("Location:interface.php"); 
} else {
    echo "<script>
alert('Data upload failed. Please try again!');
window.location.href = 'form.php';
</script>";
}
?>