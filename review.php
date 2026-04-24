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
    <div class="frmBoxReview">
        <form class="frmReview" method="post" action="">
            <div class="frmTitle">
                <h3>Review "Game Name Here"</h3>
            </div>

            <div class="frmInputTxtArea">
                <textarea id="txtBox" type="text" id="review" name="review"></textarea>
            </div>

            <div class="frmBtn">
                <input type="reset" id="reset" value="Reset">
                <input type="submit" id="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="reviewList">
        <!-- for each review for game -->
        <div class="usrReview">
            <h3>UserName</h3>
            <p>Review Text Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates enim molestiae quam tempora laborum laboriosam nam praesentium possimus, cupiditate sed delectus aliquid similique voluptatibus error sunt at quis deleniti consequuntur.</p>
        </div>
        <!-- end for each -->
    </div>
</body>
</html>