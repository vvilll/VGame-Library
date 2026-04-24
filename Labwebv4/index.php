<?php
//include auth_session.php file on all user panel pages
include 'dbconnect.php';
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="content.php">Search</a></li>
        </ul>
        <div><a class="btn" href="login.php">Login/Register</a></div>
    </nav>
    <div class="homePage">
        <?php foreach($ranGame as $game):?>
            <div class="gameCard">
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