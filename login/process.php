<?php
// Initialize session
session_start();

// Include database connection settings
include('../include/dbconn.php');

if (isset($_POST['login'])) {
    /* Capture values from HTML form */
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve member type from the database
    $sql = "SELECT username, password FROM admin WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
    $row = mysqli_num_rows($query);

    if ($row == 0) {
        // Jump to indexwrong page
        header('Location: indexwrong.html');
    } else {
        // Fetch the result
        $r = mysqli_fetch_assoc($query);
        $username = $r['username'];
    
        // Check if the query returned a valid result
        if (!empty($username)) {
            $_SESSION['username'] = $username;
            // Redirect to the appropriate page
            header('Location: ../admin'); // or 'Location: ../user' as needed
        } else {
            header('Location: index.html');
        }
    }
}    
mysqli_close($dbconn);
?>
