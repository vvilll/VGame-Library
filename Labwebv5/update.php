<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include 'dbconnect.php';
$email = $_SESSION['email'];
$nodeID = $_SESSION['userID'];
$newname = $_POST['username'];
$newemail = $_POST['email'];
$sql = "UPDATE users 
        SET username='$newname', email='$newemail'
        WHERE id=$nodeID";

if ($result = mysqli_query($conn, $sql)) {
    $_SESSION['username'] = $newname;
    $_SESSION['email'] = $newemail;
    header("Location: account.php");
}
?>