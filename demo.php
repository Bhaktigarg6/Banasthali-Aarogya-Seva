<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            margin-top: 10px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            cursor: pointer;
        }

        a:hover {
            text-decoration: underline;
        }

        .hidden {
            display: none;
        }

    </style>
</head>
<body>

    <div class="container" id="loginContainer">
        <h2>Login</h2>

        <form method="POST">
            <input type="text" placeholder="Enter your username" required>
            <input type="password" placeholder="Enter your password" id="passwor" name="password" required>
            <button type="submit">Login</button>
        </form>
        
        <p><a onclick="showForgotPassword()">Forgot Password?</a></p>
    </div>

    <div class="container hidden" id="forgotPasswordContainer">
        <h2>Reset Password</h2>
        <p>Enter your email to receive a password reset link.</p>
        <form method="POST">
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <button type="button" onclick="sendResetLink()">Send</button>
        </form>
        <p id="confirmationMessage" class="hidden" name="confirm" >Link sent, please check your inbox.</p>
        <p><a onclick="showLogin()">Back to Login</a></p>
    </div>

    <script>
        function showForgotPassword() {
            document.getElementById("loginContainer").classList.add("hidden");
            document.getElementById("forgotPasswordContainer").classList.remove("hidden");
        }

        function showLogin() {
            document.getElementById("forgotPasswordContainer").classList.add("hidden");
            document.getElementById("loginContainer").classList.remove("hidden");
        }

        function sendResetLink() {
            let email = document.getElementById("emailInput").value;

            if (email === "") {
                alert("Please enter your email address.");
                return;
            }

            // Simulating email send (In real implementation, send request to backend)
            setTimeout(() => {
                document.getElementById("confirmationMessage").classList.remove("hidden");
            }, 1000);
        }
    </script>

</body>
</html>
