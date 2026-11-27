<?php
// Simple hardcoded credentials
$valid_username1 = "shahed2";
$valid_password1 = "qlkjd";

$valid_username2="shahed334";
$valid_password2="JSDNS";

$valid_username3="shahed6677";
$valid_password3=";OIWEJU;OIQW";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check credentials
    if ($username == $valid_username1 && $password == $valid_password1 || $username == $valid_username2 && $password == $valid_password2 || $username == $valid_username3 && $password == $valid_password3 ) {
        header("Location: app.html"); // Redirect to the 'welcome.php' page
        exit();
    } else {
        echo "Invalid credentials, please try again.";
    }
}
?>
