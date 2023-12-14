<?php
// Include database connection settings
include('../include/dbconn.php');

include ("../login/session.php");
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../login');
    exit;
}

// Check if product ID is provided
if (isset($_GET['service_id'])) {
    // Retrieve the product ID from the URL parameter
    $product_id = $_GET['service_id'];

    // Delete the product from the database
    $query = "DELETE FROM services WHERE service_id = $service_id";
    $result = mysqli_query($dbconn, $query);

    if ($result) {
        // Product deletion successful, redirect to the view products page
        header("Location: update_view_user.php");
        exit;
    } else {
        // Product deletion failed
        echo "Error deleting product. Please try again.";
    }
} else {
    // Redirect to the view products page if no product ID is provided
    header("Location: update_view_user.php");
    exit;
}
?>
