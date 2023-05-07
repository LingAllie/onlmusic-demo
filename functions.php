<?php
    // function check_login($con) {
    //     if(isset($_SESSION['user_id'])) {
    //         $id = $_SESSION['user_id'];
    //         $query = "select * from users where user_id = '$id' limit 1";

    //         $result = mysqli_query($con, $query);
    //         if($result && mysqli_num_rows($result) > 0) {
    //             $user_data = mysqli_fetch_assoc($result);
    //             return $user_data;
    //         }
    //     }

    //     //redirect to login
    //     header("Location: login.php");
    //     die;
    // }

    function get_user_by_id($id) {
        global $conn;
    
        $query = "SELECT username FROM users WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            return $user;
        } else {
            return null;
        }
    }

    function random_num($length) {
        $text = "";
        if($length < 5) {
            $length = 5;
        }

        $len = rand(4, $length);

        for ($i = 0; $i < $len; $i++) {
            $text .= rand(0, 9);
        }

        return $text;
    }
?>