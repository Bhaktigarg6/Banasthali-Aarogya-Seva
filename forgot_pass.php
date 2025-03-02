<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

function send_password_reset($get_name, $get_email, $token)
{
    
}



// Database connection
$conn = new mysqli("localhost", "root", "", "aarogya_seva");

if (isset($_POST['submit-btn'])){
    $email= mysqli_real_escape_string($conn, POST['email']);
    $token=md5(rand());

    $check_email= "SELECT email FROM users WHERE email= '$email'LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(ymsql_num_rows($check_email_run) > 0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE users SET verify_token ='$token' WHERE email='$get_email' LIMIT 1";
        $update_token_run = mysqli_query($con, $update_token);

        if($update_token_run)
        {
            send_password_reset($get_name, $get_email, $token);
            $_SESSION['status'] = "We e-mailed you a password reset link" ; 
            header("Location: reset_pass.php");
            exit(0);
        }
        else
        {
            $_SESSION['status'] = "Something went wrong. ";
            header("location: reset_pass.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['status']= "No Email Found";
        header("location: reset_pass.php");
        exit(0);
    }
}
?>























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container a {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="forgot_pass.php" method="POST"> 
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit" class="submit-btn">Login</button>
            <a href="reset_pass.php">Forgot Password?</a>
        </form>
    </div>
</body>
</html>
