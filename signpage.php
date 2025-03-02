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

<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "users";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    $SmartCard_ID = $_POST['SmartCard_ID'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        // Hash the password before storing
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if email already exists
        $checkmail = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($checkmail);

        if ($result->num_rows > 0) {
            echo "<script>alert('Email Address Already Exists!');</script>";
        } else {
            // Insert data into the users table
            $insertQuery = "INSERT INTO users (role, SmartCard_ID, email, password) 
                            VALUES ('$role', '$SmartCard_ID', '$email', '$hashed_password')";

            if ($conn->query($insertQuery) === TRUE) {
                echo "<script>alert('Signup successful!'); window.location.href='personalinformation.php';</script>";

                echo "Error: " . $conn->error;
            }
        }
    }
}

// Close connection
$conn->close();
?>

<form method="POST">
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

        <button class="button" type="submit">Sign Up</button>
    </div>
    <a href="personalinformation.php" class="btn">Sign Up</a>
</form>

</body>
</html>
