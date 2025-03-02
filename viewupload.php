<?php
include('dbconnection.php');

$query = "SELECT file_data, file_type FROM upload_details ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con, $query);

if ($row = mysqli_fetch_assoc($result)) {
    header("Content-type: " . $row['file_type']);
    echo $row['file_data'];
} else {
    echo "No image found.";
}
?>
