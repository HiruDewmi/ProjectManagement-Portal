
<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$password = $password = md5($password);

require("db_con.php");

$sql = "SELECT `id`, `username`, `password` FROM `login` WHERE `username`='$username' AND `password`='$password'";


$result = $conn->query($sql) or die($conn->error);
$conn->close();
$row = $result->fetch_assoc();

session_start();
if ($row['username'] == $username && $row['password'] == $password) {
    $_SESSION["user"] = $row['username'];
    header("Location:interface.php");
} else {
    $_SESSION['message-login'] = "Login Incorrect. Please try again";
    header("Location:index.php");
}
?>