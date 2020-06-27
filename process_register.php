
<?php

require("db_con.php");


$username = mysqli_real_escape_string($conn, $_POST['usr']);
$password = mysqli_real_escape_string($conn, $_POST['pas']);
$password2 = mysqli_real_escape_string($conn, $_POST['pas2']);

session_start();
if ($password2 == $password) {

    $sql = "SELECT `username`, `password` FROM `login` WHERE `username`='$username'";
    $result = $conn->query($sql) or die($conn->error);
    $row = $result->fetch_assoc();


    if ($row['username'] == $username) {
        $_SESSION['message-reg'] = "User name already exsist. Try another!";
        header("Location:register.php");
    } else {
        //create
        $password = md5($password);
        $sql = "INSERT INTO `login` (`ID`, `username`, `password`) VALUES (NULL, '$username', '$password')";
        $result = $conn->query($sql);
        $conn->close();
        if ($result == 1) {
            $_SESSION['message-login'] = "Account created. Please log in";
            header("location: index.php");
        } else {
            $_SESSION['message-reg'] = "Registration failed. Please try again!";
            header("Location:register.php");
        }
    }
} else {
    $_SESSION['message-reg'] = "Passwords mis-match. Please try again";
    header("Location:register.php");
}
?>