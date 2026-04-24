<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include 'dbconnect.php';
$email = $_SESSION['email'];
$nodeID = $_SESSION['userID'];
$newname = $_POST['username'];
$sql = "UPDATE users 
        SET username='$newname'
        WHERE id=$nodeID";

if ($result = mysqli_query($conn, $sql)) {
    $_SESSION['username'] = $newname;
    header("Location: account.php");
}
?>