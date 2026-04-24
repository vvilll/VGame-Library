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
    <?php
    require('dbconnect.php');
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);   
        $email = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='$password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['userID'] = $row['id'];
            header("Location: account.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Email/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
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
        <form class="frm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="frmTitle">
                <h3 class="text-danger">Login Form</h3>
                <p class="text-muted mb-0">Fill in the information below and click submit.</p>
            </div>

            <div class="frmInput">
                <label for="email">E-mail</label><br>
                <input id="txtBox" type="text" id="email" name="email" placeholder="name@example.com"/>
            </div>

            <div class="frmInput">
                <label for="email">Password</label><br>
                <input id="txtBox" type="password" id="password" name="password"/>
            </div>

            <div class="frmBtn">
                <input type="reset" id="reset" value="Reset">
                <input type="submit" id="submit" value="Submit">
            </div>
        </form>
        <a href="signup.php">Dont Have an Account Register Here</a>
    </div>
<?php
    }
?>
</body>
</html>