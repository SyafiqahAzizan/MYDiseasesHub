<?php
include('../include/dbconn.php');

// Check if the form was submitted
if (isset($_POST['submit'])) {
    $service_id = $_POST['service_id'];
    $title = htmlspecialchars($_POST['title']);
    $icon = htmlspecialchars($_POST['icon']);
    $description = htmlspecialchars($_POST['description']);

    // Use a prepared statement
    $update = "UPDATE services SET title=?, icon=?, description=? WHERE service_id=?";
    $stmt = mysqli_prepare($dbconn, $update);

    // Bind parameters and execute
    mysqli_stmt_bind_param($stmt, "sssi", $title, $icon, $description, $service_id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('Location: update_view_disease.php');
        exit;
    } else {
        die("Error: " . mysqli_error($dbconn));
    }
}
?>
