<?php
session_start();

include("connection.php");
include("functions.php");

$error = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $select = "SELECT * FROM users WHERE username = ? LIMIT 1";
    $stmt = mysqli_prepare($con, $select);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0) {
        $error = "User already exists!";
    } else {
        if($password != $cpassword) {
            $error = 'Passwords do not match!';
        } else {
            if(!empty($username) && !empty($password) && !empty($cpassword) && !is_numeric($username)) {
                //save to database
                $user_id = random_num(20);
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO users (user_id, username, password) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($con, $query);
                mysqli_stmt_bind_param($stmt, "sss", $user_id, $username, $hashed_password);
                mysqli_stmt_execute($stmt);

                header("Location: login.php");
                die;
            } 
            else {
                $error = "Please enter valid information!";
            }
        }
    }

    if(mysqli_num_rows($result) > 0) {
        $error = "User already exists!";
    } else {
        if(empty($username) || empty($password) || empty($cpassword) || is_numeric($username)) {
            $error = "Please enter valid information!";
        } else {
            if (strlen($password) < 6) {
                $error = "Password must be at least 6 characters";
            } else {
                if ($password != $cpassword) {
                    $error = 'Passwords do not match!';
                } else {
                    //save to database
                    $user_id = random_num(20);
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $query = "INSERT INTO users (user_id, username, password) VALUES (?, ?, ?)";
                    $stmt = mysqli_prepare($con, $query);
                    mysqli_stmt_bind_param($stmt, "sss", $user_id, $username, $hashed_password);
                    mysqli_stmt_execute($stmt);

                    header("Location: login.php");
                    die;
                }
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
    <title>Signup</title>
    <link rel="icon" href="assets/images/logo1.png" />
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <div class="form-box">
        
        <form method="post">

            <h1> Sign up </h1>
            <div class="input-box">
                <i class="fa fa-user-circle fa-lg"></i>
                <input type="text" name="username" placeholder="Username" id="user" >
            </div>
            <div class="input-box">
                <i class="fa fa-key fa-lg"></i>
                <input type="password" name="password" placeholder="Password" id="pwd" >
            </div>
            <div class="input-box">
                <i class="fa fa-lock fa-lg"></i>
                <input type="password" name="cpassword" placeholder="Confirm password" id="pwd" >
            </div>
            
            <button type="submit" class="login-btn">SIGN UP</button>
            <p>Already have account ? <a href="login.php">Login </a><br><br></p>
            <a href="index.php" class="active"><i class="fa fa-home fa-lg""></i></a>
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