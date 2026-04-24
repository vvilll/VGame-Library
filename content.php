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
    <div class="contentPg">
        <div class="libList">
            <!-- for each display game from results -->
            <div class="libTitle">
                <img src="images/tmp.png" alt="dev">
                <div class="libDesc">
                    <p class="titleDesc">Game Title<br>Game Genre</p><br>
                    <a href="">Steam</a><br>
                    <a class="btn" href="review.php">Review</a>
                </div>
            </div>
            <!-- end of for each -->
        </div>
        <div class="frmBoxSearch">
            <form class="frm" method="post" action="">
                <div class="frmTitle">
                    <h3 class="text-danger">Search</h3>
                </div>

                <div class="frmInput">
                    <label for="email">Title / genre</label><br>
                    <input id="txtBox" type="search" id="game" name="game"/>
                </div>

                <div class="frmBtn">
                    <input type="reset" id="reset" value="Reset">
                    <input type="submit" id="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>