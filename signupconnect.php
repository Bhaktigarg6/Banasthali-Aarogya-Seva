<?php
// Enable Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "aarogya_seva";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging - Print POST data
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $role = trim($_POST['role']);
    $SmartCard_ID = trim($_POST['SmartCard_ID']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("<script>alert('Passwords do not match!');</script>");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        die("<script>alert('Email Address Already Exists!');</script>");
    } else {
        // Insert data using prepared statements
        $stmt = $conn->prepare("INSERT INTO users (role, SmartCard_ID, email, password_hash) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $role, $SmartCard_ID, $email, $hashed_password);

    //     if ($stmt->execute()) {
    //         echo "<script>alert('Signup successful!'); window.location.href='personalinformation.php';</script>";
    //     } else {
    //         die("Error inserting data: " . $stmt->error);
    //     }
    // }
    if ($stmt->execute()) {
        echo "<script>
            document.body.innerHTML = '<div style=\"display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; font-size: 24px; color: #1e3a8a; text-align: center; padding: 20px;\">' +
                '<strong>Thanks for connecting with us!</strong><br>' +
                '<strong>Now you can digitize your health records too—because if even memes and breakups are online, why not this? 🤳😆</strong><br>' +
                '<strong>But hey, I genuinely hope you won’t have to come to this app too often. Stay healthy, stay awesome! </strong>' +
            '</div>';
            
            setTimeout(function() {
                window.location.href = 'personalinformation.php';
            }, 10000); // Redirect after 10 seconds
        </script>";
        exit;
    }
}    
    
    $stmt->close();
}

$conn->close();
?>
