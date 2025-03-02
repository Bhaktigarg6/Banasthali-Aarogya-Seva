<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection
$conn = new mysqli("localhost", "root", "", "aarogya_seva");

// Check if the connection is successful
if ($conn->connect_error) {
    die("<script>alert('Database connection failed!');</script>");
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    echo "<script>
        if (confirm('Please recheck the form before submission.')) {
    </script>";

    // Retrieve text input fields
    $guardian_name = $_POST['guardian_name'] ?? '';
    $student_name = $_POST['student_name'] ?? '';

    // File upload handling
    $upload_dir = "uploads/";
    $guardian_signature = $_FILES['guardian_signature'] ?? null;
    $student_signature = $_FILES['student_signature'] ?? null;
    
    $guardian_signature_path = '';
    $student_signature_path = '';

    // Validate and process guardian signature
    if ($guardian_signature && $guardian_signature['error'] == 0) {
        $guardian_ext = pathinfo($guardian_signature['name'], PATHINFO_EXTENSION);
        if ($guardian_ext === "pdf") {
            $guardian_signature_path = $upload_dir . "guardian_" . time() . ".pdf";
            move_uploaded_file($guardian_signature['tmp_name'], $guardian_signature_path);
        } else {
            echo "<script>alert('Only PDF files are allowed for the guardian signature!');</script>";
            exit;
        }
    }

    // Validate and process student signature
    if ($student_signature && $student_signature['error'] == 0) {
        $student_ext = pathinfo($student_signature['name'], PATHINFO_EXTENSION);
        if ($student_ext === "pdf") {
            $student_signature_path = $upload_dir . "student_" . time() . ".pdf";
            move_uploaded_file($student_signature['tmp_name'], $student_signature_path);
        } else {
            echo "<script>alert('Only PDF files are allowed for the student signature!');</script>";
            exit;
        }
    }

    // Ensure all required fields are filled
    if (empty($guardian_name) || empty($student_name) || empty($guardian_signature_path) || empty($student_signature_path)) {
        echo "<script>alert('Error: One or more required fields are missing. Please check your inputs.');</script>";
        exit;
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO medform_pg4 (guardian_name, student_name, guardian_signature, student_signature) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $guardian_name, $student_name, $guardian_signature_path, $student_signature_path);

    if ($stmt->execute()) {
        echo "<script>
                if (confirm('Please recheck the form before submission.')) {
                  alert('Form submitted successfully!');
                  window.location.href = 'thankyoupage.html';
              }
              </script>";
    } else {
        echo "<script>
              alert('Error submitting form. Please try again.');
              window.history.back();
            </script>";
    }

  //   if ($conn->query($sql) === TRUE) {
  //     echo "<script>
  //             if (confirm('Please recheck the form before submission.')) {
  //                 alert('Form submitted successfully!');
  //                 window.location.href = 'HA_pg3.php';
  //             }
  //           </script>";
  // } else {
  //     echo "<script>
  //             alert('Error submitting form. Please try again.');
  //             window.history.back();
  //           </script>";
  // }

    // Close statement and connection
    $stmt->close();
    
    echo "<script> } </script>"; // Closing the confirm() alert
}
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Declaration Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 50px;
      line-height: 1.6;
    }

    .container {
      border: 1px solid #000;
      padding: 20px;
      width: 90%;
      margin: 0 auto;
    }

    .title {
      text-align: center;
      font-weight: bold;
      font-size: 1.2em;
      margin-bottom: 20px;
    }

    .content {
      text-align: justify;
    }

    .signatures {
      display: flex;
      justify-content: space-between;
      margin-top: 50px;
    }

    .sign-box {
      width: 40%;
    }

    .sign-box label {
      font-weight: bold;
    }

    .upload {
      margin-top: 10px;
    }

    .name-input {
      margin-top: 20px;
      width: 100%;
      border: 1px solid #000;
      padding: 5px;
      font-size: 1em;
    }

    .footer {
      text-align: center;
      margin-top: 30px;
      font-size: 0.9em;
    }


    .btn-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

    .btn {
            flex: 1;
            text-align: center;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

  </style>
</head>
<body>
  <div class="container">
    <form action="HA_pg4.php" method="POST" enctype="multipart/form-data">

        <div class="title">घोषणा / DECLARATION</div>
        <div class="content">
          <p>
            We do hereby declare that the foregoing statement and answers have been given by us
            after fully understanding the questions, and the same are true and complete in every
            particular and that no information has been withheld. I understand that any willfully
            or misleading answer or material omission which relates to any question before mentioned
            may make me ineligible for my studies at Banasthali Vidyapith.
          </p>
          <p>
            हम यह स्पष्ट रूप से घोषणा करते हैं कि उपयुक्त विवरण तथा उत्तर हमारे द्वारा प्रश्नों को पूरी तरह समझने के बाद दिए गए हैं। 
            सभी विवरण सत्य एवं पूर्ण हैं और कोई जानकारी छिपाई नहीं गई है। मैं समझती/समझता हूँ कि पूछे गए किसी भी प्रश्न के 
            संबंध में मेरे द्वारा दिए गए गलत जवाब या मेरे द्वारा छिपाया गया तथ्य मुझे विद्यापीठ में अध्ययन करने के अयोग्य बना सकता है।
          </p>
        </div>
        <div class="signatures">
          <div class="sign-box">
            <label>Signature:</label>
            <input type="file" name="guardian_signature" class="upload" accept="application/pdf" required>
            <p>Name of Guardian (in CAPITAL):</p>
            <input type="text" class="name-input" name= "guardian_name" placeholder="Enter Guardian's Name" required>
          </div>
          <div class="sign-box">
            <label>Signature:</label>
            <input type="file" name="student_signature" class="upload" accept="application/pdf" required>
            <p>Name of the Student:</p>
            <input type="text" class="name-input" name= "student_name" placeholder="Enter Student's Name" required>
          </div>
        </div>
        <div class="btn-row">
                <button type="submit" name="submit" class="btn-submit">Submit</button>
            </div>
       </form>
  </div>
</body>
</html>
