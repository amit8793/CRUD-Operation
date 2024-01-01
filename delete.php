<?php
include("connection.php");

if (isset($_GET["id"])) {
    $userId = $_GET['id'];
    $deleteUser = mysqli_query($conn, "DELETE FROM `users` WHERE id = $userId");

    if ($deleteUser) {
        header("Location:userlist.php");
    } else {
        echo "<script type='text/javascript'>alert('User Not Deleted!')</script>";
    }
}
?>