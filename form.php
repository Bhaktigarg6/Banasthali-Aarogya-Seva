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

        .btn-submit {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
    <!-- <script>
        function confirmSubmission(event) {
            event.preventDefault();
            if (confirm("Please recheck your entries on this page. They cannot be changed once submitted. Click OK to submit.")) {
                document.getElementById("medicalForm").submit();
            }
        }
    </script> -->
    <script>
        function confirmSubmission(event) {
            event.preventDefault();

            if (confirm("Please recheck your entries on this page. They cannot be changed once submitted. Click OK to submit.")) {
                let form = document.getElementById("medicalForm");

                fetch(form.action, {
                    method: "POST",
                    body: new FormData(form)
                })
                .then(response => response.text()) // Get response as text
                .then(data => {
                    console.log("Server Response:", data); // Log response for debugging

                    if (data.includes("success")) {
                        alert("Form submitted successfully.");
                        window.location.href = "HA_pg2.php";
                    } else {
                        alert("Error submitting form: " + data); // Show exact error message
                    }
                })
                .catch(error => console.error("Fetch Error:", error));
            }
        }


    </script>

</head>
<body>
    <div class="form-container">
    <form id="medicalForm" action="connect.php" method="POST">
        <!-- Logo Section 
         -->
        <img src="bv_logo.jpg" alt="Banasthali Vidyapith Logo" class="logo" width="110" height="80">

        <h1>स्वास्थ्य आकलन (Health Assessment)</h1>
        <table class="header-table">
            <tr>
                <td>कक्षा (Class): <input type="text" placeholder="Enter Class" name="class" required /></td>
                <td>सेशन (Session): <input type="text" placeholder="Enter Session" name="session" required/></td>
                <td>ID No.: <input type="text" placeholder="Enter ID No." name="id_no" required /></td>
            </tr>
        </table>

        <div class="section">
            <h2>Section 1: Personal Details</h2>
            <div class="form-row">
                <label for="name">नाम (Name):</label>
                <input type="text" id="name" name="name">
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

        <!-- section-2 -->

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
                <textarea id="details" name="details" rows="3" class="dscrp"></textarea>
            </div>
        </div>

        <button type="submit" class="btn-submit" value="submit" name="submit" onclick="confirmSubmission(event)">Submit</button>
        <!-- <button type="submit" class="btn-submit" onclick="confirmSubmission(event)">Submit</button> -->
    </div>
</body>
</html>
