<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include 'dbconnect.php';
$email = $_SESSION['email'];
$nodeID = $_SESSION['userID'];
$username = $_SESSION['username'];
$reviewlist = [];
$checkstmt = $conn->prepare("SELECT r.Content, g.GameName, r.ReviewID FROM reviews r JOIN games g ON r.GameID = g.GameID WHERE r.UserID = ?");
$checkstmt->bind_param("i", $nodeID);
$checkstmt->execute();
$result = $checkstmt->get_result();
if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        {
            $reviewlist[] = $row;  
        }
    }
$checkstmt->close();
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
    <div class="reviewList">
        <!-- for each review for game -->
        <?php foreach($reviewlist as $review):?>
        <div class="usrReview">
            <h3>Game: <?php echo htmlspecialchars($review['GameName']) ;?></h3>
            <p><?php echo $review['Content'];?></p>
            <a href="delete.php?id=<?php echo $review['ReviewID']; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </div>
        <!-- end for each -->
         <?php endforeach; ?>
    </div>
</body>
</html>