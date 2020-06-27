<?php

require("db_con.php");

$id = $_GET['ID'];
// delete the entry

$sql = "UPDATE `project_info` SET `status`='Deleted' WHERE ID=$id";
$result = $conn->query($sql);
$conn->close();

if ($result == 1) {
    echo "<script>
alert('Successefully deleted!');
window.location.href = 'update.php';
</script>";
} else {
    echo "<script>
alert('Failed please try again!');
window.location.href = 'update.php';
</script>";
}
?>