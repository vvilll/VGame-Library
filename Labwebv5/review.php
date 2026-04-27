<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include 'dbconnect.php';
$email = $_SESSION['email'];
$nodeID = $_SESSION['userID'];
if(isset($_GET['id']))
    {
        $reviewlist = [];
        $id = $_GET['id'];
        $sql = "SELECT * FROM games 
        WHERE GameID = '$id'";
        $result = mysqli_query($conn, $sql);
        $game = mysqli_fetch_assoc($result);
        //review list grab
        $checkstmt = $conn->prepare("SELECT * FROM reviews r JOIN users u ON r.UserID = u.id WHERE r.GameID = ?");
        $checkstmt->bind_param("i", $id);
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
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $review = $_POST["review"];
        $gameID = $_POST["gameid"];
        $sql = "INSERT INTO reviews (GameID, UserID, Content) VALUES (?, ?, ?)";
        // Prepare the SQL query template
        $stmt = $conn->prepare($sql);
        // Bind parameters
        $stmt->bind_param("iis", $gameID, $nodeID, $review);
        $stmt->execute();
        $stmt->close();
        header("Location: content.php");
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
        </ul>
        <div><a class="btn" href="account.php">Account</a></div>
    </nav>
    <div class="frmBoxReview">
        <form class="frmReview" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="hidden" name="gameid" value="<?= $id; ?>">
            <div class="frmTitle">
                <h3>Review "<?php echo $game['GameName']; ?>"</h3>
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
        <?php foreach($reviewlist as $review):?>
        <div class="usrReview">
            <h3>Username: <?php echo htmlspecialchars($review['username']) ;?></h3>
            <p><?php echo $review['Content'];?></p>
        </div>
        <!-- end for each -->
         <?php endforeach; ?>
    </div>
</body>
</html>