<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Banasthali Aarogya Seva</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="n.css">
</head>
<body>
    <form action="signupconnect.php" method="POST">
        <div class="container c1">
            <div class="header">
                <img src="banasthali-logo.png" alt="Banasthali Logo">
            </div>

            <h3>Welcome To Banasthali Aarogya Seva</h3>

            <label for="role">Select Role:</label>
            <select id="role" name="role" required>
                <option value="student">Student</option>
                <option value="doctor">Doctor</option>
            </select>

            <label for="SmartCard_ID">Enter SmartCard ID: </label>
            <input type="text" id="SmartCard_ID" name="SmartCard_ID" required>

            <label for="email">Enter Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Create Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button id="signupButton" type="submit" name="SignUP">Sign Up</button>
        </div>
    </form>
</body>
</html>
