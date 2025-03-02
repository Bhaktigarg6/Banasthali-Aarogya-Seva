<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection
$conn = new mysqli("localhost", "root", "", "aarogya_seva");

// Check if connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $special = $_POST['special'] ?? '';
    $specialDetails = $_POST['specialDetails'] ?? '';
    $skin = $_POST['skin'] ?? '';
    $neuro = $_POST['neuro'] ?? '';
    $allergy = $_POST['allergy'] ?? '';
    $hormone = $_POST['hormone'] ?? '';
    $healthDetails = $_POST['healthDetails'] ?? '';
    $consciousness = $_POST['consciousness'] ?? '';
    $mental = $_POST['mental'] ?? '';
    $eating = $_POST['eating'] ?? '';
    $illness = $_POST['illness'] ?? '';
    $affectedDetails = $_POST['affectedDetails'] ?? '';

    // Insert data into the database
    $sql = "INSERT INTO medform_pg2 (special_arrangements, ifyes_description2, chronicskin_cond, 
    neurological_disorder, Allergies, hormone_related, ifyes_description3, consciousness, 
    mental_health_prob, eating_disorder, illness_req_treat, ifyes_description4)
            VALUES ('$special', '$specialDetails', '$skin', '$neuro', '$allergy', '$hormone', '$healthDetails',
            '$consciousness', '$mental' , '$eating', '$illness', '$affectedDetails')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                if (confirm('Please recheck the form before submission.')) {
                    alert('Form submitted successfully!');
                    window.location.href = 'HA_pg3.php';
                }
              </script>";
    } else {
        echo "<script>
                alert('Error submitting form. Please try again.');
                window.history.back();
              </script>";
    }
}

// Close the connection
$conn->close();
?>


<!-- HTML UI CODE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Assessment Form - Page 2</title>
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
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .section {
            margin-bottom: 20px;
            border: 1px solid #000;
            padding: 15px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-row {
            display: flex;
            margin-bottom: 10px;
            align-items: center;
            margin-top: 20px;
        }

        .form-row label {
            width: 200px;
        }

        label {
            font-weight: bold;
        }

        .radio-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .radio-table th, .radio-table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        .radio-table td.description {
            text-align: left;
        }

        textarea {
            resize: none;
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
    <div class="form-container">
        <form action="HA_pg2.php" method="POST">
            <h2>स्वास्थ्य आकलन (Health Assessment) - Page 2</h2>

            <div class="section">
                <p>2. क्या आपको विद्यालय में अपने स्वास्थ्य या शारीरिक कमी के कारण कभी विशेष व्यवस्था की आवश्यकता हुई है? (Have you ever required special arrangements at school to accommodate an impairment or health problem?)</p>
                <table class="radio-table">
                    <tr>
                        <td>हाँ (Yes)</td>
                        <td><input type="radio" id="specialYes" name="special" value="yes" required></td>
                        <td>नहीं (No)</td>
                        <td><input type="radio" id="specialNo" name="special" value="no" required></td>
                    </tr>
                </table>
                <div class="form-row">
                    <label for="specialDetails">यदि हाँ तो विवरण दें (If yes, provide details):</label>
                    <textarea id="specialDetails" name="specialDetails" rows="3" placeholder="N/A" required>NA</textarea>
                </div>
            </div>

            <div class="section">
                <p>3. क्या आपको इनमें से कोई है? (Do you have any of the following?)</p>
                <table class="radio-table">
                    <tr>
                        <th>संपर्क विवरण (Description)</th>
                        <th>हाँ (Yes)</th>
                        <th>नहीं (No)</th>
                    </tr>
                    <tr>
                        <td class="description">(a) पुरानी त्वचा स्थिति (Chronic skin condition, e.g., eczema, psoriasis)</td>
                        <td><input type="radio" id="skinYes" name="skin" value="yes" required></td>
                        <td><input type="radio" id="skinNo" name="skin" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(b) न्यूरोलॉजिकल डिसऑर्डर (Neurological disorder, e.g., epilepsy, multiple sclerosis)</td>
                        <td><input type="radio" id="neuroYes" name="neuro" value="yes" required></td>
                        <td><input type="radio" id="neuroNo" name="neuro" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(c) एलर्जी (Allergies, e.g., latex, medications, foods)</td>
                        <td><input type="radio" id="allergyYes" name="allergy" value="yes" required></td>
                        <td><input type="radio" id="allergyNo" name="allergy" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(d) हार्मोन संबंधित रोग (Hormone related disease, e.g., diabetes, thyroid)</td>
                        <td><input type="radio" id="hormoneYes" name="hormone" value="yes" required></td>
                        <td><input type="radio" id="hormoneNo" name="hormone" value="no" required></td>
                    </tr>
                </table>
                <div class="form-row">
                    <label for="healthDetails">यदि हाँ तो विवरण दें (If yes, provide details):</label>
                    <textarea id="healthDetails" name="healthDetails" rows="3" placeholder="N/A" required>NA</textarea>
                </div>
            </div>

            <div class="section">
                <p>क्या आप कभी प्रभावित हुए हैं? (Have you ever been affected by)</p>
                <table class="radio-table">
                    <tr>
                        <th>संपर्क विवरण (Description)</th>
                        <th>हाँ (Yes)</th>
                        <th>नहीं (No)</th>
                    </tr>
                    <tr>
                        <td class="description">(e) अचानक होश खोना (Sudden loss of consciousness, e.g., low BP)</td>
                        <td><input type="radio" id="consciousnessYes" name="consciousness" value="yes" required></td>
                        <td><input type="radio" id="consciousnessNo" name="consciousness" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(f) मानसिक स्वास्थ्य समस्याएं (Mental health problems, e.g., anxiety, depression)</td>
                        <td><input type="radio" id="mentalYes" name="mental" value="yes" required></td>
                        <td><input type="radio" id="mentalNo" name="mental" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(g) खाने का विकार (Eating disorder, e.g., anorexia, bulimia)</td>
                        <td><input type="radio" id="eatingYes" name="eating" value="yes" required></td>
                        <td><input type="radio" id="eatingNo" name="eating" value="no" required></td>
                    </tr>
                    <tr>
                        <td class="description">(h) कोई बीमारी जिसके लिए इलाज चल रहा हो (Illness requiring treatment, e.g., operation)</td>
                        <td><input type="radio" id="illnessYes" name="illness" value="yes" required></td>
                        <td><input type="radio" id="illnessNo" name="illness" value="no" required></td>
                    </tr>
                </table>
                <div class="form-row">
                    <label for="affectedDetails">यदि हाँ तो विवरण दें (If yes, provide details):</label>
                    <textarea id="affectedDetails" name="affectedDetails" rows="3" placeholder="N/A" required>NA</textarea>
                </div>
            </div>

            <div class="btn-row">
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
