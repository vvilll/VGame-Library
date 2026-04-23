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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Double:wght@100..900&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
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
                    <li><a href="content.php" style="color: rgb(247, 233, 70);">Library</a></li>
                    <li><a href="logabout.php" style="color: rgb(247, 233, 70);">About Us</a></li>
                    <li><a href="logout.php" style="color: rgb(247, 233, 70);">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="usrIcon">
            <a href="account.php"><img src="images/icon.png" alt="dev" width="100px" height="100px"></a>
        </div>

    </div>
    <div class="accountBody">
        <div class="uName">
            <p>Username: <?php echo $_SESSION['username']; ?></p> 
            <div id="formContainer">
                <form action="update.php" method="POST">
                    <input type="text" name="username" placeholder="Enter new username">
                    <input class="ms-2 rounded text-white bg-dark" type="submit" value="Submit">
                </form>
            </div>
        </div>
        <br>
        <div class="email">
            <p>Email: <?php echo $_SESSION['email']; ?></p>
        </div>
        <div>
            <h1 class="bodyTitle">Your Top 3 Games</h1>
            <div class="titleList">
                <div class="title">
                    <img class="titleImg" src="images/stsPopGame.png" alt="dev" >
                    <p class="titleDesc"><b>Slay the Spire 2</b><br>roguelike deckbuilder</p><br>
                    <a href="https://store.steampowered.com/app/2868840/Slay_the_Spire_2/">Steam</a>
                </div>
                <div class="title">
                    <img class="titleImg" src="images/ds2PopGame.png" alt="dev">
                    <p class="titleDesc"><b>Death Stranding 2</b><br>Story based Action Adventure</p><br>
                    <a href="https://store.steampowered.com/app/3280350/DEATH_STRANDING_2_ON_THE_BEACH/">Steam</a>

                </div>
                <div class="title">
                    <img class="titleImg" src="images/rorPopGame.png" alt="dev">
                    <p class="titleDesc"><b>Ready or Not</b> <br>tactical, first-person shooter</p><br>
                    <a href="https://store.steampowered.com/app/1144200/Ready_or_Not/">Steam</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>