<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

$file = $_FILES['fileToUpload']['tmp_name'];
$file_content = addslashes(file_get_contents($file));

$query = "INSERT into userslogged (file_name, uploaded_on) VALUES ('$file_content', NOW())";
$result = mysqli_query($con, $query);

if ($result) {
    echo "File uploaded successfully";
} else {
    echo "Error uploading file";
}