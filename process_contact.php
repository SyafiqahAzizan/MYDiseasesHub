<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Replace 'your_database_info' with your actual database connection information
    $dbconn = new PDO('mysql:host=localhost;dbname=fyp', 'root', '');

    $query = $dbconn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $query->execute([$name, $email, $subject, $message]);

    // Redirect to the thank-you page
    header("Location: thankyou.html");
    exit; // Make sure to exit to prevent further script execution
} else {
    // Handle invalid form submissions or other errors
    echo "Invalid form submission.";
}
?>
