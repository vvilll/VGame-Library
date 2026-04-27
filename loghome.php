<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include 'dbconnect.php';
$email = $_SESSION['email'];
$nodeID = $_SESSION['userID'];
$ranGame = [];
$sql = "SELECT * FROM games
                ORDER BY RAND()
                LIMIT 3";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
    {
        $ranGame[] = $row;
    }
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
            <li><a href="loghome.php">Home</a></li>
            <li><a href="logabout.php">About</a></li>
            <li><a href="content.php">Search</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div><a class="btn" href="account.php">Account</a></div>
    </nav>
    <div class="homePage">
            <?php foreach($ranGame as $game):?>
            <div class="gameCard" onclick="window.location.href='review.php?id=<?php echo $game['GameID']; ?>';">
                <img src="<?php echo $game['imgLink']; ?>">
                <div class="cardDesc">
                    <h1><?php echo $game['GameName']; ?></h1>
                    <p><?php echo $game['Genre']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>