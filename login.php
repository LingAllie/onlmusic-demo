<?php
session_start();

include("connection.php");
include("functions.php");

$error = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password) || is_numeric($username)) {
        $error = "Please enter valid information!";
    } else {
        $select = "SELECT * FROM users WHERE username = ? LIMIT 1";
        $stmt = mysqli_prepare($con, $select);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $user_data = $result->fetch_assoc();

            if(password_verify($password, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        } else {
            $error = "Invalid username or password!";
        }
    }
}


// Check if a guest login was requested
if(isset($_GET['guest']) && $_GET['guest'] == "true") {
    // Set the guest username and password
    $username = "guest";
    $password = "guest123";

    // Query the database to check if the guest user exists
    $stmt = $con->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result) {
        if($result->num_rows > 0) {
            $user_data = $result->fetch_assoc();

            // Check if the password is correct
            if(password_verify($password, $user_data['password'])) {
                // Set the user ID in the session and redirect to the homepage
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die();
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
    <link rel="icon" href="assets/images/logo1.png" />
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <div class="form-box">
        <form method="post" >
            <h1> Login </h1>
            <div class="input-box">
                <i class="fa fa-user-circle fa-lg"></i>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="input-box">
                <i class="fa fa-key fa-lg"></i>
                <input type="password" name="password" placeholder="Password" id="pwd">
            </div>
            <button type="submit" class="login-btn">LOGIN</button>
            <p>Don't have an account? <a href="signup.php">Sign up</a><br><br></p>
            <p><a class="guest" href="login.php?guest=true">Login as Guest?</a><br><br></p>
            <a href="music.php" class="active"><i class="fa fa-home fa-lg"></i></a>
            <?php
                if($error) {
                    echo "<p>$error</p>";
                }
            ?>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
