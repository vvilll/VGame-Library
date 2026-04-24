<?php
    session_start();
    if(!isset($_SESSION['userID']) || !isset($_SESSION["email"]) || !isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
?>
