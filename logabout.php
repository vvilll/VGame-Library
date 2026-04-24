<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include 'dbconnect.php';
$email = $_SESSION['email'];
$nodeID = $_SESSION['userID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Double:wght@100..900&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="headerLogo">
            <a href="loghome.php">
                <img src="images/labLogo.png" alt="dev" width="150" height="150">
            </a>
        </div>
        <div class="headerNav">
            <nav class="navBar">
                <ul>
                    <li><a href="content.php">Library</a></li>
                    <li><a href="logabout.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="usrIcon">
            <a href="account.php"><img src="images/icon.png" alt="dev" width="100px" height="100px"></a>
        </div>
    </div>
    <div class="aboutDes">
        <h1 class="bodyTitle">Who We Are</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro animi sed odio distinctio illum placeat voluptas accusamus, assumenda voluptatem. Quidem voluptates facilis debitis porro sequi quis eveniet accusantium hic ducimus!</p><br><br><br><br>
        <h1 class="bodyTitle">Our Goals</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi eveniet debitis molestias facilis maxime. Beatae assumenda reprehenderit fugit maxime nihil possimus ipsam dolore ea non repellat, adipisci temporibus velit autem!</p>
    </div>
</body>
</html>