<?php
include('../include/dbconn.php');

if (isset($_POST['submit'])) {
    $disease_id = $_POST['disease_id'];
    $year = htmlspecialchars($_POST['year']);
    $disease_name = htmlspecialchars($_POST['disease_name']);
    $icon = htmlspecialchars($_POST['icon']);
    $death_count = htmlspecialchars($_POST['death_count']);
    $description = htmlspecialchars($_POST['description']);

    // Use a prepared statement for the update
    $update = "UPDATE top_disease SET year=?, disease_name=?, icon=?, death_count=?, description=? WHERE disease_id=?";
    $stmt = mysqli_prepare($dbconn, $update);

    // Bind parameters and execute
    mysqli_stmt_bind_param($stmt, "dssssd", $year, $disease_name, $icon, $death_count, $description, $disease_id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('Location: update_view_order.php');
        exit;
    } else {
        die("Error: " . mysqli_error($dbconn));
    }
}
?>
