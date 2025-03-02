

<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection
$conn = new mysqli("localhost", "root", "", "aarogya_seva");

// Check if connection is successful
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Database connected successfully.<br>";
// }

// Check if the form is submitted
if (isset($_POST['save'])) {
    // Retrieve form data
    
    $mobility = $_POST['mobility'] ?? '';
    $exertion = $_POST['exertion'] ?? '';
    $communication = $_POST['communication'] ?? '';
    $vision = $_POST['vision'] ?? '';
    $learning = $_POST['learning'] ?? '';
    $details = $_POST['details'] ?? '';

    // Verify the data is received
    echo "<pre>";
    print_r($_POST);  // Display the form data for debugging
    echo "</pre>";

    // Insert data into the database
    $sql = "INSERT INTO medical_form ( Mobility, physical_Exertion, Communication, Vision, Learning, ifyes_description1)
            VALUES ('$mobility', '$exertion', '$communication', '$vision', '$learning', '$details')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>


<!-- Html UI code -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Assessment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }

        .form-container {
            width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            position: relative;
        }

        .logo {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        .header-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .header-table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }

        .section {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-row {
            display: flex;
            margin-bottom: 10px;
            align-items: center;
        }

        .form-row label {
            width: 200px;
        }

        .form-row input, .form-row textarea {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .checkbox-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .checkbox-table th, .checkbox-table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        .checkbox-table td.description {
            text-align: left;
        }

        textarea {
            resize: none;
        }

        .btn-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-row a, .btn-row button {
            width: 48%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007BFF;
        }

        .btn-row a:hover, .btn-row button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="submit_form.php" method="POST">
            <!-- Logo Section -->
            <img src="bv_logo.jpg" alt="Banasthali Vidyapith Logo" class="logo" width="110" height="80">

            <h1>स्वास्थ्य आकलन (Health Assessment)</h1>
            <table class="header-table">
                <tr>
                    <td>कक्षा (Class): <input type="text" placeholder="Enter Class" name="class" required/></td>
                    <td>सेशन (Session): <input type="text" placeholder="Enter Session" name="session" required/></td>
                    <td>ID No.: <input type="text" placeholder="Enter ID No." name="idNo" required/></td>
                </tr>
            </table>

            <div class="section">
                <h2>Section 1: Personal Details</h2>
                <div class="form-row">
                    <label for="name">नाम (Name):</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-row">
                    <label for="parentName">पिता/माता का नाम (Father's/Mother's Name):</label>
                    <input type="text" id="parentName" name="parentName" required>
                </div>

                <div class="form-row">
                    <label for="dob">जन्म तिथि (Date of Birth):</label>
                    <input type="date" id="dob" name="dob" required>
                </div>

                <div class="form-row">
                    <label for="height">ऊंचाई (Height in cm):</label>
                    <input type="number" id="height" name="height" required>
                </div>

                <div class="form-row">
                    <label for="weight">वजन (Weight in kg):</label>
                    <input type="number" id="weight" name="weight" required>
                </div>

                <div class="form-row">
                    <label for="address">पता (Address):</label>
                    <textarea id="address" name="address" rows="2" required></textarea>
                </div>

                <div class="form-row">
                    <label for="phone">फोन नंबर (Phone Number):</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-row">
                    <label for="email">ईमेल (Email Address):</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

            <!-- Section 2 -->

            <div class="section">
                <h2>Section 2: Your Health & Function Capabilities</h2>
                <p>क्या आपको इनमें से किसी में समस्या है? (Do you have problems with any of the following?)</p>

                <table class="checkbox-table">
                    <tr>
                        <th>संपर्क विवरण (Description)</th>
                        <th>हाँ (Yes)</th>
                        <th>नहीं (No)</th>
                    </tr>
                    <tr>
                        <td class="description">(a) गतिशीलता (Mobility, e.g., walking, balance)</td>
                        <td><input type="radio" id="mobilityYes" name="mobility" value="yes" required></td>
                        <td><input type="radio" id="mobilityNo" name="mobility" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(b) शारीरिक प्रयास (Physical exertion, e.g., running)</td>
                        <td><input type="radio" id="exertionYes" name="exertion" value="yes" required></td>
                        <td><input type="radio" id="exertionNo" name="exertion" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(c) संचार (Communication, e.g., speech, hearing)</td>
                        <td><input type="radio" id="communicationYes" name="communication" value="yes" required></td>
                        <td><input type="radio" id="communicationNo" name="communication" value="no" required></td>
                    </tr>
                    <tr>
                    <td class="description">(d) नजर (Vision, e.g., visual impairment)</td>
                        <td><input type="radio" id="visionYes" name="vision" value="yes" required></td>
                        <td><input type="radio" id="visionNo" name="vision" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(e) सीखना (Learning)</td>
                        <td><input type="radio" id="learningYes" name="learning" value="yes" required></td>
                        <td><input type="radio" id="learningNo" name="learning" value="no" required></td>
                    </tr>
                </table>

                <div class="form-row">
                    <label for="details">यदि हाँ तो विवरण दें (If yes, provide details):</label>
                    <textarea id="details" name="details" rows="3" class="dscrp" required> NA </textarea>
                </div>
            </div>

            <div class="btn-row">
                <a href="HA_pg2.php">Next Page</a>
                <button type="submit" name="save">Save as Draft</button>
            </div>
        </form>
    </div>
</body>
</html>

