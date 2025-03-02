<?php
include('dbconnection.php');

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Restrict file size to 5MB
        if ($_FILES['image']['size'] > 5 * 1024 * 1024) { // 5MB limit
            $msg = "Error: File size exceeds 5MB.";
        } else {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $fileName = $_FILES['image']['name'];
            $fileType = $_FILES['image']['type'];

            $query = "INSERT INTO upload_details (file_data, file_name, file_type) VALUES ('$imgContent', '$fileName', '$fileType')";
            if (mysqli_query($con, $query)) {
                $msg = "Image uploaded successfully!";
            } else {
                $msg = "Upload failed: " . mysqli_error($con);
            }
        }
    } else {
        $msg = "Please select an image to upload.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture Upload</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { width: 50%; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        .profile-img { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; display: block; margin: 20px auto; border: 2px solid #000; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload and Display Profile Picture</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*">
            <br>
            <button type="submit">Upload</button>
        </form>

        <p><?php echo $msg; ?></p>

        <h3>Your Profile Picture</h3>
        <img id="profilePic" class="profile-img" src="viewupload.php" alt="Profile Picture">
    </div>
</body>
</html>
