<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection
$conn = new mysqli("localhost", "root", "", "aarogya_seva");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_POST);  // Debugging: Print received form data
    echo "</pre>";

    // Required fields list
    $required_fields = ['mentalConsult', 'medication', 'supportNeeded', 'mentalDetails', 
                        'gynecologistConsult', 'gynecologyDetails', 'campusGynecologist', 
                        'tuberculosis', 'dpt', 'mmr', 'chickenpox', 'typhoid', 
                        'hepatitisB', 'hepatitisA', 'swineFlu', 'covidFirstDose', 
                        'covidSecondDose', 'covidBoosterDose', 'otherMedicalConditions'];

    // Check for missing fields
    $empty_fields = [];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
            $empty_fields[] = $field;
        }
    }

    // Debugging: Print which fields are missing
    if (!empty($empty_fields)) {
        echo "<script>alert('Missing fields: " . implode(", ", $empty_fields) . "'); window.location.href='HA_pg3.php';</script>";
        exit();
    }

    // Retrieve form data
    $mentalConsult = $_POST['mentalConsult'];
    $medication = $_POST['medication'];
    $supportNeeded = $_POST['supportNeeded'];
    $mentalDetails = $_POST['mentalDetails'];
    $gynecologistConsult = $_POST['gynecologistConsult'];
    $gynecologyDetails = $_POST['gynecologyDetails'];
    $campusGynecologist = $_POST['campusGynecologist'];
    $tuberculosis = $_POST['tuberculosis'];
    $dpt = $_POST['dpt'];
    $mmr = $_POST['mmr'];
    $chickenpox = $_POST['chickenpox'];
    $typhoid = $_POST['typhoid'];
    $hepatitisB = $_POST['hepatitisB'];
    $hepatitisA = $_POST['hepatitisA'];
    $swineFlu = $_POST['swineFlu'];
    $covidFirstDose = $_POST['covidFirstDose'];
    $covidSecondDose = $_POST['covidSecondDose'];
    $covidBoosterDose = $_POST['covidBoosterDose'];
    $otherMedicalConditions = $_POST['otherMedicalConditions'];

    // Insert data into the correct table: "medform_pg3"
    $sql = "INSERT INTO medform_pg3 (`consultation`, `medication_treatment`, `other_support`, 
        `ifyes_description5`, `gynec_issuebefore`, `ifyes_description6`, `campus_gynec`, `BCG`, `DPT`, `MMR`,
        `chickenpox`, `typhoid`, `hepatitis_B`, `hepatitis_A`, `swine_flu`, `covid_firstdose`, `covid_seconddose`,
        `covid_boosterdose`, `ifyes_description7`)
        VALUES ('$mentalConsult', '$medication', '$supportNeeded', '$mentalDetails', '$gynecologistConsult',
                '$gynecologyDetails', '$campusGynecologist', '$tuberculosis', '$dpt', '$mmr', '$chickenpox', 
                '$typhoid', '$hepatitisB', '$hepatitisA', '$swineFlu', '$covidFirstDose', '$covidSecondDose',
                '$covidBoosterDose', '$otherMedicalConditions')";

    // Execute query and handle alerts
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                if (confirm('Please recheck the form before submission.')) {
                    alert('Form submitted successfully!');
                    window.location.href = 'HA_pg4.php';
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
    <title>Health Assessment Form - Page 3</title>
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
            border: 1px solid #000;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }

        table td.text {
            text-align: left;
        }

        textarea {
            resize: none;
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }

        .radio-table th, .radio-table td {
            text-align: center;
        }

        .btn-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }


        /* .button-row a, .button-row button {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            text-align: center;
        }

        .button-row a:hover, .button-row button:hover {
            background-color: #0056b3;
        } */

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

        .final-note {
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="HA_pg3.php" method="POST">
            <h2>स्वास्थ्य आकलन (Health Assessment) - Page 3</h2>

            <div class="section">
                <p>4. (a) क्या आपने कभी मानसिक स्वास्थ्य से सम्बंधित परामर्श लिया है? (Have you ever taken consultation from a psychiatrist, psychotherapist, or counsellor?)</p>
                <table class="radio-table">
                    <tr>
                        <td>हाँ (Yes)</td>
                        <td><input type="radio" name="mentalConsult" value="yes" required></td>
                        <td>नहीं (No)</td>
                        <td><input type="radio" name="mentalConsult" value="no" required></td>
                    </tr>
                </table>

                <p>(b) क्या आप अभी कोई दवा/उपचार ले रहे हैं? (Are you currently taking any medication or treatment?)</p>
                <table class="radio-table">
                    <tr>
                        <td>हाँ (Yes)</td>
                        <td><input type="radio" name="medication" value="yes" required></td>
                        <td>नहीं (No)</td>
                        <td><input type="radio" name="medication" value="no" required></td>
                    </tr>
                </table>

                <p>(c) क्या आपके पास ऐसी कोई समस्या है जिसके लिए शिक्षण/प्रशिक्षण के दौरान समर्थन की आवश्यकता हो सकती है? (Do you have any impairment or health condition not already mentioned for which you think you may require support during your education or training?)</p>
                <table class="radio-table">
                    <tr>
                        <td>हाँ (Yes)</td>
                        <td><input type="radio" name="supportNeeded" value="yes" required></td>
                        <td>नहीं (No)</td>
                        <td><input type="radio" name="supportNeeded" value="no" required></td>
                    </tr>
                </table>

                <div>
                    <label>यदि हाँ तो विवरण दें (If yes, give details):</label>
                    <textarea name="mentalDetails" rows="3" placeholder="N/A" required>NA</textarea>
                </div>
            </div>

            <div class="section">
                <p>5. स्त्री रोग सम्बन्धी परामर्श (Gynecological Evaluation)</p>

                <p>(a) क्या आपने किसी स्त्री रोग विशेषज्ञ से परामर्श लिया है? (Have you ever consulted a doctor regarding any gynecological issue before?)</p>
                <table class="radio-table">
                    <tr>
                        <td>हाँ (Yes)</td>
                        <td><input type="radio" name="gynecologistConsult" value="yes" required></td>
                        <td>नहीं (No)</td>
                        <td><input type="radio" name="gynecologistConsult" value="no" required></td>
                    </tr>
                </table>

                <div>
                    <label>यदि हाँ तो विवरण दें (If yes, give details):</label>
                    <textarea name="gynecologyDetails" rows="3" placeholder="N/A" required>NA</textarea>
                </div>

                <p>(b) क्या आप परिसर में आने के बाद स्त्री रोग विशेषज्ञ से परामर्श करना चाहेंगे? (Would you like to consult a campus gynecologist after your arrival in Vidyapith?)</p>
                <table class="radio-table">
                    <tr>
                        <td>हाँ (Yes)</td>
                        <td><input type="radio" name="campusGynecologist" value="yes" required></td>
                        <td>नहीं (No)</td>
                        <td><input type="radio" name="campusGynecologist" value="no" required></td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <p> 6. प्रतिरक्षण विवरण (Immunisation Record)</p>
                <table>
                    <tr>
                        <th>S.No</th>
                        <th>टीकाकरण (Vaccination)</th>
                        <th>Yes</th>
                        <th>No</th>
                        <th>Not Sure</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>तपेदिक-बीसीजी (Tuberculosis-BCG)</td>
                        <td><input type="radio" name="tuberculosis" value="yes" required></td>
                        <td><input type="radio" name="tuberculosis" value="no" required></td>
                        <td><input type="radio" name="tuberculosis" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>डिप्थीरिया, टेटनस, पोलियो (DPT)</td>
                        <td><input type="radio" name="dpt" value="yes" required></td>
                        <td><input type="radio" name="dpt" value="no" required></td>
                        <td><input type="radio" name="dpt" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>मिज़ल्स, मंप्स, रुबेला (MMR)</td>
                        <td><input type="radio" name="mmr" value="yes" required></td>
                        <td><input type="radio" name="mmr" value="no" required></td>
                        <td><input type="radio" name="mmr" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>चिकनपॉक्स (Chickenpox)</td>
                        <td><input type="radio" name="chickenpox" value="yes" required></td>
                        <td><input type="radio" name="chickenpox" value="no" required></td>
                        <td><input type="radio" name="chickenpox" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>टाइफाइड (Typhoid)</td>
                        <td><input type="radio" name="typhoid" value="yes" required></td>
                        <td><input type="radio" name="typhoid" value="no" required></td>
                        <td><input type="radio" name="typhoid" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>हेपेटाइटिस बी (Hepatitis B)</td>
                        <td><input type="radio" name="hepatitisB" value="yes" required></td>
                        <td><input type="radio" name="hepatitisB" value="no" required></td>
                        <td><input type="radio" name="hepatitisB" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>हेपेटाइटिस ए (Hepatitis A)</td>
                        <td><input type="radio" name="hepatitisA" value="yes" required></td>
                        <td><input type="radio" name="hepatitisA" value="no" required></td>
                        <td><input type="radio" name="hepatitisA" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>स्वाइन फ्लू (Swine Flu)</td>
                        <td><input type="radio" name="swineFlu" value="yes" required></td>
                        <td><input type="radio" name="swineFlu" value="no" required></td>
                        <td><input type="radio" name="swineFlu" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>कोविड-19 (Covid-19 First Dose)</td>
                        <td><input type="radio" name="covidFirstDose" value="yes" required></td>
                        <td><input type="radio" name="covidFirstDose" value="no" required></td>
                        <td><input type="radio" name="covidFirstDose" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>कोविड-19 (Covid-19 Second Dose)</td>
                        <td><input type="radio" name="covidSecondDose" value="yes" required></td>
                        <td><input type="radio" name="covidSecondDose" value="no" required></td>
                        <td><input type="radio" name="covidSecondDose" value="notSure" required></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>कोविड-19 (Covid-19 Booster Dose)</td>
                        <td><input type="radio" name="covidBoosterDose" value="yes" required></td>
                        <td><input type="radio" name="covidBoosterDose" value="no" required></td>
                        <td><input type="radio" name="covidBoosterDose" value="notSure" required></td>
                    </tr>
                </table>
            </div>

            <div class="section">
                <p>6. कोई अन्य चिकित्सा स्थिति जिसका उल्लेख नहीं किया गया है? (Any other medical condition not mentioned above?)</p>
                <textarea name="otherMedicalConditions" rows="4" placeholder="Please specify if any.">N/A</textarea>
            </div>

            <div class="btn-row">
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>

            <p class="final-note">* सभी जानकारी गोपनीय रखी जाएगी (All information will be kept confidential).</p>
        </form>
    </div>
</body>
</html>

