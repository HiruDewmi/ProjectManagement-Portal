
<style>
    .dropbtn {
        background-color: transparent;
        border: none;
        cursor: pointer;

    }

    .dropdown {
        position: relative;
        display: inline-block;
        float: right;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: transparent;
    }
</style>
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:index.php");
}
?>

<div class="dropdown">
    <button class="dropbtn">Hello <?php echo $_SESSION["user"]; ?> [logout]</button>
    <div class="dropdown-content">
        <a href="log_out.php">Log Out</a>
    </div>
</div>

