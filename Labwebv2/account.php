<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include 'dbconnect.php';
$email = $_SESSION['email'];
$nodeID = $_SESSION['userID'];
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">Archive</div>
        <ul class="navPages">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="content.php">Search</a></li>
        </ul>
        <div><a class="btn" href="login.php">Login/Register</a></div>
    </nav>
    <div class="frmBox">
        <form class="frm" action="update.php" method="POST">

            <div class="frmInput">
                <label for username>Username: <?php echo $_SESSION['username']; ?></label>
                <input type="text" name="username" placeholder="Enter new username">
            </div>

            <div class="frmInput">
                <label for email>Username: <?php echo $_SESSION['email']; ?></label>
                <input type="text" name="email" placeholder="Enter new email">
            </div>
            <div class="frmBtn"><input type="submit" value="Submit"></div>
        </form>
    </div>
</body>
</html>