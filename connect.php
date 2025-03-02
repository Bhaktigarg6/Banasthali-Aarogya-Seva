<!--

// //to see if there is any error in this code.
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// if(isset($_POST['submit'])){
// $mobility = $_POST['mobility'];
// $exertion = $_POST['exertion'];
// $communication = $_POST['communication'];
// $vision = $_POST['vision'];
// $learning = $_POST['learning'];
// }

// Database connection

// $conn= new mysqli("localhost","root","","medical_form");
// if($conn->connect_error){
//     echo "Connection Failed : " .$conn->connect_error;
// }
// else{
//     $stmt = $conn->prepare("insert into medical_form(Mobility, physical_Exertion, Communication, Vision, Learning)
//                             values(?,?,?,?,?)")
//     $stmt->bind_param("sssss", $mobility,$exertion,$communication,$vision,$learning);
//     $stmt->execute();
//     echo "Inserted Successfully.";
//     $stmt->bind_result($ $mobility,$exertion,$communication,$vision,$learning)
//     $stmt->store_result();
    
//     stmt->close();
//     conn->close();
// }

<php

// Enable error reporting
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// //to verify that the data is been sent
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


// // Check if form is submitted
// if (isset($_POST['submit'])) {
//     // Retrieve form data
//     $mobility = $_POST['mobility'] ?? '';
//     $exertion = $_POST['exertion'] ?? '';
//     $communication = $_POST['communication'] ?? '';
//     $vision = $_POST['vision'] ?? '';
//     $learning = $_POST['learning'] ?? '';

//     Database connection
//     $conn = new mysqli("localhost", "root", "", "medical_form");


//     // Check for connection error
//     if ($conn->connect_error) {
//         die("Connection Failed: " . $conn->connect_error);
//     }else {
//         echo "Database connected successfully.<br>";
//     }

//     // Prepare SQL statement
//     $stmt = $conn->prepare("INSERT INTO medical_form (`Mobility`, `physical_Exertion`, `Communication`, `Vision`, `Learning`, `ifyes_description`) VALUES (?, ?, ?, ?, ?)");

//     if ($stmt) {
//         // Bind parameters
//         $stmt->bind_param("sssss", $mobility, $exertion, $communication, $vision, $learning);

//         // Execute the statement
//         if ($stmt->execute()) {
//             echo "Inserted Successfully.";
//         } else {
//             echo "Error: " . $stmt->error;
//         }

//         // Close the statement
//         $stmt->close();
//     } else {
//         echo "Error in preparing the statement: " . $conn->error;
//     }

//     // Close the connection
//     $conn->close();
// } else {
//     echo "Form not submitted.";
// }



<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "aarogya_seva";

$conn = new mysqli($host, $username, $password, $database);

// ✅ Check Database Connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ✅ Log Form Data to Debug
    file_put_contents("debug_log.txt", "Form Data:\n" . print_r($_POST, true), FILE_APPEND);

    // ✅ Use Correct Key Names (Match Form Inputs)
    $Id_no = $_POST["id_no"];
    $class = $_POST["class"];
    $session = $_POST["session"];
    $name = $_POST["name"];
    $parent_name = $_POST["parentName"];  // Fixed case mismatch
    $dob = $_POST["dob"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $Mobility = $_POST["mobility"]; // Fixed case mismatch
    $physical_Exertion = $_POST["exertion"]; // Fixed case mismatch
    $Communication = $_POST["communication"]; // Fixed case mismatch
    $Vision = $_POST["vision"]; // Fixed case mismatch
    $Learning = $_POST["learning"]; // Fixed case mismatch
    $ifyes_description1 = $_POST["details"]; // Fixed case mismatch

    // ✅ Prepare SQL Query
    $stmt = $conn->prepare("INSERT INTO med_form (Id_no, class, session, name, parent_name, dob, height, weight, address, phone, email, Mobility, physical_Exertion, Communication, Vision, Learning, ifyes_description1) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssdisssssssss", $Id_no, $class, $session, $name, $parent_name, $dob, $height, $weight, $address, $phone, $email, $Mobility, $physical_Exertion, $Communication, $Vision, $Learning, $ifyes_description1);

    // ✅ Execute Query
    if ($stmt->execute()) {
        echo "<script>alert('Form submitted successfully'); window.location.href = 'next_page.php';</script>";
        file_put_contents("debug_log.txt", "Success: Data inserted successfully\n", FILE_APPEND);
    } else {
        echo "<script>alert('Error submitting form: " . $stmt->error . "');</script>";
        file_put_contents("debug_log.txt", "Error: " . $stmt->error . "\n", FILE_APPEND);
    }

    $stmt->close();
}

$conn->close();
?>


