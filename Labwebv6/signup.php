<?php
        session_start();
        require('dbconnect.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = test_input($_POST["username"]);
        $email = strtolower(trim($_POST["email"]));
        $pass = $_POST["password2"];
        $mobile = test_input($_POST["mobile"]);
        $emailcheck = false;
        $checkSql = "SELECT id FROM users WHERE email = ? LIMIT 1";
        if ($checkStmt = $conn->prepare($checkSql)) {
            $checkStmt->bind_param("s", $email);
            $checkStmt->execute();
            $checkStmt->store_result();

            if ($checkStmt->num_rows > 0) {
                echo "That email is already registered.";
                $emailcheck = true;
            }

            $checkStmt->close();
        } else {
            echo "Error preparing email check: " . $conn->error;
        }
        if($emailcheck)
        {}
        else{
        // SQL query template
        $sql = "INSERT INTO users (username, email, password, mobile) VALUES (?, ?, ?, ?)";
        // Prepare the SQL query template
        if($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param("ssss", $uname, $email, $pass, $mobile);
        $stmt->execute();
        $userNodeID = $conn->insert_id;
        $_SESSION['email'] = $email;
        $_SESSION['userID'] = $userNodeID;
        $_SESSION['username'] = $uname;
        $stmt->close();
        $conn->close();
        header("Location: account.php");
        exit();
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }
        $conn->close();
        }
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
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
    <div class="frmBox">
        <form class="frm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="frmTitle">
                <h3 class="text-danger">Signup Form</h3>
                <p class="text-muted mb-0">Fill in the information below and click submit.</p>
            </div>

            <div class="frmInput">
                <label class="text-muted" for="email">Username</label><br>
                <input class="form-control" id="txtBox" type="text" id="username" name="username" required/>
            </div>

            <div class="frmInput">
                <label class="text-muted" for="email">E-mail</label><br>
                <input class="form-control" id="txtBox" type="text" id="email" name="email" placeholder="name@example.com" required/>
            </div>

            <div class="frmInput">
                <label class="text-muted" for="email">Password</label><br>
                <input class="form-control" id="txtBox" type="password" id="password" name="password" required/>
            </div>

            <div class="frmInput">
                <label class="text-muted" for="email">Confirm Password</label><br>
                <input class="form-control" id="txtBox" type="password" id="password" name="password2" required/>
            </div>

            <div class="frmInput">
                <label class="text-muted" for="mobile">Mobile</label><br>
                <input class="form-control" id="txtBox" type="text" id="mobile" name="mobile" required pattern="[0-9]+" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="+91..."/>
            </div>

            <div class="frmBtn">
                <input class="ms-2 rounded bg-light text-dark" type="reset" id="reset" value="Reset">
                <input class="ms-2 rounded text-white bg-dark" type="submit" id="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>